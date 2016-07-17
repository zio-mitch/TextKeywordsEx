<?php

namespace Pherserk\TextKeywordsEx\Component;


class PeriodSplitterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideStrings
     */
    public function testSplit(String $string)
    {
        $periods = PeriodSplitter::split($string);

        self::assertEquals('Example 1', $periods[0]);
        self::assertEquals('This is a test phrase', $periods[1]);
        self::assertEquals('divided in one or more periods', $periods[2]);
        self::assertEquals('Should it be simplest', $periods[3]);
        self::assertEquals('Good luck', $periods[4]);
    }

    public function provideStrings()
    {
        return [
            ["Example 1: \nThis is a   test phrase, divided in one or more periods. Should it be simplest? \n\n Good luck! "]
        ];
    }
}