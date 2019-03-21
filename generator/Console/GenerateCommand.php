<?php

namespace Spatie\Emoji\Generator\Console;

use GuzzleHttp\Client;
use Spatie\Emoji\Generator\Parser;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class GenerateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('generate')
            ->setDescription('Generate the package code from the emoji docs');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $now = time();
        $output->writeln('Generating package code...');

        $output->writeln('Load file...');
        $client = new Client();
        $response = $client->get('https://unicode.org/Public/emoji/12.0/emoji-test.txt');
        if ($response->getStatusCode() !== 200) {
            $output->writeln('<error>unable to load https://unicode.org/Public/emoji/12.0/emoji-test.txt</error>');

            return 1;
        }

        $output->writeln('Parse response...');
        $body = $response->getBody();
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $now).'.txt', $body);
        $parser = new Parser($body);
        $parser->parse();
        $emojis = $parser->getEmojis();
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $now).'.json', json_encode($emojis));

        $output->writeln('Generate class...');
        $loader = new FilesystemLoader(__DIR__.'/../templates');
        $twig = new Environment($loader, [
            'cache' => false,
            'autoescape' => false,
        ]);
        $class = $twig->load('Emoji.twig')->render([
            'url' => 'https://unicode.org/Public/emoji/12.0/emoji-test.txt',
            'loaded_at' => $now,
            'version' => 'v12.0',
            'groups' => $emojis,
        ]);
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $now).'.php', $class);
        file_put_contents(__DIR__.'/../../src/Emoji.php', $class);

        $output->writeln('Done!');

        return 0;
    }
}
