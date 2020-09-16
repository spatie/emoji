<?php

namespace Spatie\Emoji\Generator;

use ArrayAccess;
use JsonSerializable;

class Emoji implements JsonSerializable, ArrayAccess
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $code;

    /** @var string */
    protected $cleanName;

    /** @var string */
    protected $const;

    /** @var string */
    protected $method;

    public function __construct(string $name, string $code)
    {
        $this->setName($name);
        $this->setCode($code);
    }

    protected function setCode(string $code)
    {
        $this->code = '\u{'.implode('}\u{', explode(' ', $code)).'}';
    }

    protected function setName(string $name)
    {
        $name = str_replace([
            '*',
            '#',
            '1st',
            '2nd',
            '3rd',
            '&',
            'U.S.',
        ], [
            'asterisk',
            'hash',
            'first',
            'second',
            'third',
            'and',
            'US',
        ], $name);

        $name = strtr($name, [
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r',
        ]);

        $name = preg_replace('/E[0-9]+\.[0-9] /', null, $name);

        $this->name = $name;
        $this->cleanName = mb_strtolower(preg_replace("/\s+/", ' ', preg_replace("/[^\w]+/", ' ', $this->name)));
        $this->const = 'CHARACTER_'.mb_strtoupper(preg_replace("/\s+/", '', preg_replace('/(.)(?= [a-z0-9])/', '$1_', $this->cleanName)));
        $this->method = lcfirst(preg_replace("/\s+/", '', ucwords($this->cleanName)));
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getCleanName(): string
    {
        return $this->cleanName;
    }

    public function getConst(): string
    {
        return $this->const;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'code' => $this->code,
            'clean_name' => $this->cleanName,
            'const' => $this->const,
            'method' => $this->method,
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function offsetExists($offset)
    {
        return in_array($offset, array_keys($this->toArray()));
    }

    public function offsetGet($offset)
    {
        return $this->toArray()[$offset];
    }

    public function offsetSet($offset, $value)
    {
        // no public set allowed
    }

    public function offsetUnset($offset)
    {
        // no public unset allowed
    }
}
