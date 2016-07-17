<?php

namespace Pherserk\TextKeywordsEx\Component;

class PeriodSplitter
{
    public static function split(String $string)
    {
        $string = preg_replace('/\s+/', ' ', $string);
        $periods = preg_split( "/\s*(\:|\!|\?|\.|\;|\,)\s*/", $string);

        return $periods;
    }
}