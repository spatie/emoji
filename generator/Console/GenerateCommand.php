<?php

namespace Spatie\Emoji\Generator\Console;

use GuzzleHttp\Client;
use ReflectionClass;
use Spatie\Emoji\Emoji;
use Spatie\Emoji\Generator\Parser;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class GenerateCommand extends Command
{
    /** @var string */
    protected const EMOJI_VERSION = '14.0';

    /** @var int */
    protected $now;

    /** @var string */
    protected $deprecationNotice = '# deprecations'.PHP_EOL;

    /** @var \Spatie\Emoji\Generator\Emoji[] */
    protected $emojis;

    /** @var array[] */
    protected $emojisArray;

    /** @var array[] */
    protected $groups;

    protected function configure()
    {
        $this
            ->setName('generate')
            ->setDescription('Generate the package code from the emoji docs');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->now = time();
        $output->writeln('Generating package code...');

        $output->writeln('Load file...');
        $url = 'https://unicode.org/Public/emoji/'.self::EMOJI_VERSION.'/emoji-test.txt';
        $body = $this->retrieveRemoteFile($url);

        $output->writeln('Parse response...');
        $this->parseResponse($body);
        $this->deprecatedConstants();
        $this->deprecatedMethods();
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $this->now).'_deprecations.md', $this->deprecationNotice);

        $output->writeln('Generate class...');
        $this->writeClass($url);

        $output->writeln('Done!');

        return 0;
    }

    protected function getCurrentConstants(): array
    {
        $reflection = new ReflectionClass(Emoji::class);

        return array_keys($reflection->getConstants());
    }

    protected function getCurrentMethods(): array
    {
        $reflection = new ReflectionClass(Emoji::class);

        $docComment = $reflection->getDocComment();

        preg_match_all('/\@method static string ([\w]+)\(\)/', $docComment, $matches);

        return $matches[1] ?? [];
    }

    protected function emojiToUnicodeHex(string $emoji)
    {
        return '\u{'.implode('}\u{', array_map(function ($hex) {
            return mb_strtoupper(ltrim($hex, '0'));
        }, str_split(bin2hex(mb_convert_encoding($emoji, 'UTF-32', 'UTF-8')), 8))).'}';
    }

    protected function retrieveRemoteFile(string $url)
    {
        $client = new Client();
        $response = $client->get($url);

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException('unable to load '.$url);
        }

        return $response->getBody();
    }

    protected function parseResponse(string $body)
    {
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $this->now).'_response.txt', $body);
        $parser = new Parser($body);
        $parser->parse();
        $this->emojis = $parser->getEmojis();
        $this->emojisArray = json_decode(json_encode($this->emojis), true);
        $this->groups = $parser->getGroups();
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $this->now).'_emojis.json', json_encode($this->emojis));
        file_put_contents(__DIR__.'/../../tests/emojis.json', json_encode($this->emojis));
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $this->now).'_groups.json', json_encode($this->groups));
    }

    protected function deprecatedConstants()
    {
        $currentConstants = $this->getCurrentConstants();
        $deprecatedConstants = array_values(array_diff($currentConstants, array_column($this->emojisArray, 'const')));

        if (! empty($deprecatedConstants)) {
            $codeToConstant = array_combine(array_column($this->emojisArray, 'code'), array_column($this->emojisArray, 'const'));
            $this->deprecationNotice .= PHP_EOL.'## deprecated constants'.PHP_EOL.PHP_EOL;
            foreach ($deprecatedConstants as $deprecatedConstant) {
                $emoji = constant(Emoji::class.'::'.$deprecatedConstant);
                $emojiCode = $this->emojiToUnicodeHex($emoji);
                $replacedBy = $codeToConstant[$emojiCode] ?? null;

                $this->deprecationNotice .= sprintf(
                        '* %s *%s* `%s` => `%s`',
                        $emoji,
                        $emojiCode,
                        Emoji::class.'::'.$deprecatedConstant,
                        ($replacedBy ? Emoji::class.'::'.$replacedBy : 'N/A')
                    ).PHP_EOL;
            }
        }
    }

    protected function deprecatedMethods()
    {
        $currentMethods = $this->getCurrentMethods();
        $deprecatedMethods = array_values(array_diff($currentMethods, array_column($this->emojisArray, 'method')));
        if (! empty($deprecatedMethods)) {
            $codeToMethod = array_combine(array_column($this->emojisArray, 'code'), array_column($this->emojisArray, 'method'));
            $this->deprecationNotice .= PHP_EOL.'## deprecated methods'.PHP_EOL.PHP_EOL;
            foreach ($deprecatedMethods as $deprecatedMethod) {
                $emoji = Emoji::{$deprecatedMethod}();
                $emojiCode = $this->emojiToUnicodeHex($emoji);
                $replacedBy = $codeToMethod[$emojiCode] ?? null;

                $this->deprecationNotice .= sprintf(
                        '* %s *%s* `%s` => `%s`',
                        $emoji,
                        $emojiCode,
                        Emoji::class.'::'.$deprecatedMethod.'()',
                        ($replacedBy ? Emoji::class.'::'.$replacedBy.'()' : 'N/A')
                    ).PHP_EOL;
            }
        }
    }

    protected function writeClass(string $url)
    {
        $loader = new FilesystemLoader(__DIR__.'/../templates');
        $twig = new Environment($loader, [
            'cache' => false,
            'autoescape' => false,
        ]);
        $class = $twig->load('Emoji.twig')->render([
            'url' => $url,
            'loaded_at' => $this->now,
            'version' => 'v'.self::EMOJI_VERSION,
            'groups' => $this->groups,
        ]);
        file_put_contents(__DIR__.'/../temp/'.date('Y_m_d-H_i_s', $this->now).'.php', $class);
        file_put_contents(__DIR__.'/../../src/Emoji.php', $class);
    }
}
