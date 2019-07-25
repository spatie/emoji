<?php

namespace Spatie\Emoji\Generator;

class Parser
{
    /** @var string */
    protected $body;

    /** @var string */
    protected $group;

    /** @var string */
    protected $subgroup;

    /** @var array */
    protected $emojis = [];

    /** @var array */
    protected $groups = [];

    public function __construct(string $body)
    {
        $this->body = $body;
    }

    public function parse()
    {
        $lines = explode("\n", $this->body);

        foreach ($lines as $line) {
            $this->parseLine(trim($line));
        }
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function getGroups(): array
    {
        return $this->groups;
    }

    protected function parseLine(string $line)
    {
        if (strlen($line) === 0) {
            return;
        }

        if (strpos($line, '# group:') === 0) {
            $this->group = trim(str_replace('# group:', '', $line));

            return;
        }

        if (strpos($line, '# subgroup:') === 0) {
            $this->subgroup = trim(str_replace('# subgroup:', '', $line));

            return;
        }

        if (strpos($line, '#') === 0) {
            return;
        }

        preg_match('/^([A-Z\d ]+)\s+;\s+(fully-qualified|component)\s+# [^a-z ]* (.+)$/', $line, $matches);
        if (count($matches) === 4) {
            [, $code, , $name] = $matches;

            if (
                $this->subgroup === 'country-flag'
                || $this->subgroup === 'subdivision-flag'
            ) {
                $name = 'flags for: '.$name;
            }

            $this->addEmoji(trim($code), trim($name));
        }
    }

    protected function addEmoji(string $code, string $name)
    {
        $emoji = new Emoji($name, $code);

        $this->groups[$this->group][$this->subgroup][$code] = $emoji;
        $this->emojis[$code] = $emoji;
    }
}
