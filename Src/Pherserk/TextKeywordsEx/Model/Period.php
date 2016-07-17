<?php

namespace Pherserk\TextKeywordsEx\Model;


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

    public function getKeywords() : array
    {
        return explode(' ', $this->text);
    }
}

