<?php

namespace Pherserk\TextKeywordsEx\Component;


class PeriodSplitterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideStrings
     */
    public function testSplit(String $string)
    {
        $portions = PeriodSplitter::split($string);

        self::assertEquals('Example 1', $portions[0]);
        self::assertEquals('This is a test phrase', $portions[1]);
        self::assertEquals('divided in one or more periods', $portions[2]);
        self::assertEquals('Should it be simplest', $portions[3]);
        self::assertEquals('good luck', $portions[4]);
    }

    public function provideStrings()
    {
        return [
            ["Example 1: \nThis is a   test phrase, divided in one or more periods. Should it be simplest? \n\n ...good luck! "]
        ];
    }
}