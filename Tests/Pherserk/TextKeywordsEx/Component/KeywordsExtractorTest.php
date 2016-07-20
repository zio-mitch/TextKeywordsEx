<?php
/**
 * Created by PhpStorm.
 * User: cagliostro
 * Date: 20/07/16
 * Time: 21.59
 */

namespace Pherserk\TextKeywordsEx\Component;


class KeywordsExtractorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideData
     */
    public function testExtract(String $text, int $size, array $expectedKeywords)
    {
        $keywords = KeywordsExtractor::extract($text, $size);

        $this->assertTrue(
            $expectedKeywords === $keywords,
            'Missing keywords'
        );
    }

    public function provideData()
    {
        return [
            [
                'Anyone loves pasta with tomatoes',
                1,
                ['Anyone', 'loves', 'pasta', 'with', 'tomatoes']
            ],
            [
                'Anyone loves pasta with tomatoes',
                2,
                ['Anyone loves', 'pasta with', 'loves pasta', 'with tomatoes']
            ],
            [
                'Anyone loves pasta with tomatoes',
                3,
                ['Anyone loves pasta', 'loves pasta with', 'pasta with tomatoes']
            ],
            [
                'Anyone loves pasta with tomatoes',
                4,
                ['Anyone loves pasta with', 'loves pasta with tomatoes']
            ]
        ];
    }
}