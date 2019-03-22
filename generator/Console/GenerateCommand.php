<?php

namespace Spatie\Emoji\Generator\Console;

use ReflectionClass;
use Twig\Environment;
use GuzzleHttp\Client;
use Spatie\Emoji\Emoji;
use Twig\Loader\FilesystemLoader;
use Spatie\Emoji\Generator\Parser;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

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
        $url = 'https://unicode.org/Public/emoji/11.0/emoji-test.txt';
        $response = $client->get($url);
        if ($response->getStatusCode() !== 200) {
            $output->writeln('<error>unable to load '.$url.'</error>');

            return 1;
        }

        $output->writeln('Parse response...');
        $body = $response->getBody();
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $now).'_response.txt', $body);
        $parser = new Parser($body);
        $parser->parse();
        $emojis = $parser->getEmojis();
        $emojisArray = json_decode(json_encode($emojis), true);
        $groups = $parser->getGroups();
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $now).'_emojis.json', json_encode($emojis));
        file_put_contents(__DIR__.'/../../tests/emojis.json', json_encode($emojis));
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $now).'_groups.json', json_encode($groups));

        $deprecationNotice = '# deprecations'.PHP_EOL;
        $currentConstants = $this->getCurrentConstants();
        $deprecatedConstants = array_values(array_diff($currentConstants, array_column($emojisArray, 'const')));
        $output->writeln('<comment>deprecated constants: '.count($deprecatedConstants).'</comment>');
        if (! empty($deprecatedConstants)) {
            $codeToConstant = array_combine(array_column($emojisArray, 'code'), array_column($emojisArray, 'const'));
            $deprecationNotice .= PHP_EOL.'## deprecated constants'.PHP_EOL.PHP_EOL;
            foreach ($deprecatedConstants as $deprecatedConstant) {
                $emoji = constant(Emoji::class.'::'.$deprecatedConstant);
                $emojiCode = $this->emojiToUnicodeHex($emoji);
                $replacedBy = $codeToConstant[$emojiCode] ?? null;

                $deprecationNotice .= sprintf(
                    '* %s *%s* `%s` => `%s`',
                    $emoji,
                    $emojiCode,
                    Emoji::class.'::'.$deprecatedConstant,
                    ($replacedBy ? Emoji::class.'::'.$replacedBy : 'N/A')
                ).PHP_EOL;
            }
        }

        $currentMethods = $this->getCurrentMethods();
        $deprecatedMethods = array_values(array_diff($currentMethods, array_column($emojisArray, 'method')));
        $output->writeln('<comment>deprecated methods: '.count($deprecatedMethods).'</comment>');
        if (! empty($deprecatedMethods)) {
            $codeToMethod = array_combine(array_column($emojisArray, 'code'), array_column($emojisArray, 'method'));
            $deprecationNotice .= PHP_EOL.'## deprecated methods'.PHP_EOL.PHP_EOL;
            foreach ($deprecatedMethods as $deprecatedMethod) {
                $emoji = Emoji::{$deprecatedMethod}();
                $emojiCode = $this->emojiToUnicodeHex($emoji);
                $replacedBy = $codeToMethod[$emojiCode] ?? null;

                $deprecationNotice .= sprintf(
                    '* %s *%s* `%s` => `%s`',
                    $emoji,
                    $emojiCode,
                    Emoji::class.'::'.$deprecatedMethod.'()',
                    ($replacedBy ? Emoji::class.'::'.$replacedBy.'()' : 'N/A')
                ).PHP_EOL;
            }
        }

        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $now).'_deprecations.md', $deprecationNotice);

        $output->writeln('Generate class...');
        $loader = new FilesystemLoader(__DIR__.'/../templates');
        $twig = new Environment($loader, [
            'cache' => false,
            'autoescape' => false,
        ]);
        $class = $twig->load('Emoji.twig')->render([
            'url' => $url,
            'loaded_at' => $now,
            'version' => 'v11.0',
            'groups' => $groups,
        ]);
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $now).'.php', $class);
        file_put_contents(__DIR__.'/../../src/Emoji.php', $class);

        $output->writeln('Done!');

        return 0;
    }

    private function getCurrentConstants(): array
    {
        $reflection = new ReflectionClass(Emoji::class);

        return array_keys($reflection->getConstants());
    }

    private function getCurrentMethods(): array
    {
        $reflection = new ReflectionClass(Emoji::class);

        $docComment = $reflection->getDocComment();

        preg_match_all('/\@method static string ([\w]+)\(\)/', $docComment, $matches);

        return $matches[1] ?? [];
    }

    private function emojiToUnicodeHex(string $emoji)
    {
        return '\u{'.implode('}\u{', array_map(function ($hex) {
            return strtoupper(ltrim($hex, '0'));
        }, str_split(bin2hex(mb_convert_encoding($emoji, 'UTF-32', 'UTF-8')), 8))).'}';
    }
}
