<?php

namespace Pherserk\TextKeywordsEx\Component;

use Pherserk\TextKeywordsEx\Model\Period;

class PeriodSplitter
{
    public static function split(String $string)
    {
        $string = preg_replace('/\s+/', ' ', $string);
        $portions = preg_split( "/\s*(\:|\!|\?|\.|\;|\,)\s*/", $string);

        $periods = [];
        foreach ($portions as $portion) {
            if (trim($portion) != '') {
                $periods[] = new Period($portion);
            }
        }

        return $periods;
    }
}