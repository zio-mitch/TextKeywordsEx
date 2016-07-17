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

        self::assertEquals('Example 1', $periods[0]->getText());
        self::assertEquals('This is a test phrase', $periods[1]->getText());
        self::assertEquals('divided in one or more periods', $periods[2]->getText());
        self::assertEquals('Should it be simplest', $periods[3]->getText());
        self::assertEquals('good luck', $periods[4]->getText());

        self::assertEquals('good', $periods[4]->getKeywords(1)[0]);
        self::assertEquals('good luck', $periods[4]->getKeywords(2)[0]);
        self::assertEquals('or more periods', $periods[2]->getKeywords(3)[1]);
    }

    public function provideStrings()
    {
        return [
            ["Example 1: \nThis is a   test phrase, divided in one or more periods. Should it be simplest? \n\n ...good luck! "]
        ];
    }
}