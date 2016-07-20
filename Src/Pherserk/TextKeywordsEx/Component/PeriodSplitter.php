<?php

namespace Pherserk\TextKeywordsEx\Component;

class PeriodSplitter
{
    public static function split(String $string)
    {
        $string = preg_replace('/\s+/', ' ', $string);
        $portions = preg_split( "/\s*(\:|\!|\?|\.|\;|\,)\s*/", $string);

        $result = [];
        foreach ($portions as $portion) {
            $portion = trim($portion);
            if ($portion !== '') {
                $result[] = $portion;
            }
        }
        
        return $result;
    }
}