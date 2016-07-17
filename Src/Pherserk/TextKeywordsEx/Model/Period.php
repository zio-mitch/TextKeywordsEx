<?php

namespace Pherserk\TextKeywordsEx\Model;


use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Period
{
    protected $text;

    public function __construct(String $text)
    {
        $this->text = $text;
    }

    public function getText() : String
    {
        return $this->text;
    }

    public function getKeywords(int $size) : array
    {
        if ($size < 1) {
            throw new InvalidArgumentException('Size must be positive');
        }

        $words = explode(' ', $this->text);

        $chunks = array_chunk($words, $size);

        $keywords = [];
        foreach ($chunks as $chunk) {
            $keywords[] = implode(' ', $chunk);
        }

        return $keywords;
    }
}

