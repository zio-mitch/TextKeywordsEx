# Components

## PeriodSplitter
The period splitter main aim is to split a period in units of meaning.
A period is a portion of text delimited within puntaction and\or generic line breaks.

Basic usage:

<?php

$units = PeriodSplitter::split('This is a text, this text will be splitted in units.\n Exactly three units ...excuse me four!')

var_dump($units);


## KeywordsExtractor
The keywords extractor scope is to split a text in word groups, grouped by a given length.
The best usage is to split a text with the period splitter, and then extract keywords from any of the previously extracted units;

Basic usage:

<?php

$couples = KeywordsExtractor::extract('This text will be divided in couples of keywords', 2);

var_dump($couples);

$triples = KeywordsExtractor::extract('This text will be divided in triples of keywords', 3);

var_dump($triples);
