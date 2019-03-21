<?php

namespace Spatie\Emoji\Generator;

final class Parser
{
    /** @var string */
    private $body;

    /** @var string */
    private $group;

    /** @var string */
    private $subgroup;

    /** @var array */
    private $emojis = [];

    public function __construct(string $body)
    {
        $this->body = $body;
    }

    public function parse()
    {
        $lines = explode("\n", $this->body);

        foreach($lines as $line) {
            $this->parseLine(trim($line));
        }
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    private function parseLine(string $line)
    {
        if (strlen($line) === 0) {
            return;
        }

        if(strpos($line, '# group:') === 0) {
            $this->group = trim(str_replace('# group:', '', $line));
            return;
        }

        if(strpos($line, '# subgroup:') === 0) {
            $this->subgroup = trim(str_replace('# subgroup:', '', $line));
            return;
        }

        if(strpos($line, '#') === 0) {
            return;
        }

        preg_match('/^([A-Z\d ]+)\s+;\s+(fully-qualified|component)\s+# [^a-z ]* ([\w\d:\-\*\# ]+)$/', $line, $matches);
        if(count($matches) === 4) {
            list(, $code, , $name) = $matches;

            $this->addEmoji(trim($code), trim($name));
        }
    }

    private function addEmoji(string $code, string $name)
    {
        if(!isset($this->emojis[$this->group])) {
            $this->emojis[$this->group] = [];
        }

        if(!isset($this->emojis[$this->group][$this->subgroup])) {
            $this->emojis[$this->group][$this->subgroup] = [];
        }

        $name = str_replace([
            '*',
            '#',
        ], [
            'asterisk',
            'hash',
        ], $name);
        $cleanName = preg_replace("/\s+/", " ", preg_replace("/[^\w]+/", " ", $name));
        $const = 'CHARACTER_'.strtoupper(preg_replace("/\s+/", "", preg_replace('/(.)(?= [a-z])/', '$1_', $cleanName)));
        $method = lcfirst(preg_replace("/\s+/", "", ucwords($cleanName)));

        $this->emojis[$this->group][$this->subgroup][$code] = [
            'name' => $name,
            'const' => $const,
            'method' => $method,
            'code' => '\u{'.implode('}\u{', explode(' ', $code)).'}',
        ];
    }
}
