<?php
/**
 * Created by PhpStorm.
 * User: cagliostro
 * Date: 20/07/16
 * Time: 21.57
 */

namespace Pherserk\TextKeywordsEx\Component;


class KeywordsExtractor
{
    public static function extract(String $text, int $size)
    {
        if ($size < 1) {
            throw new InvalidArgumentException('Size must be positive');
        }

        $keywords = [];
        for ($i = 0; $i < $size; $i++) {
            $words = array_slice(explode(' ', $text), $i);

            $chunks = array_chunk($words, $size);

            foreach ($chunks as $chunk) {
                if (count($chunk) === $size) {
                    $keywords[] = implode(' ', $chunk);
                }
            }
        }



        return $keywords;
    }
}
