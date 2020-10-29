<?php

return [

    'default' => 'fuzzy',

    'fieldName' => 'relevance',

    'drivers' => [

        'fuzzy' => [
            'class' => 'HighSolutions\LaravelSearchy\SearchDrivers\FuzzySearchDriver',
        ],

        'ufuzzy' => [
            'class' => 'HighSolutions\LaravelSearchy\SearchDrivers\FuzzySearchUnicodeDriver',
        ],

        'simple' => [
            'class' => 'HighSolutions\LaravelSearchy\SearchDrivers\SimpleSearchDriver',
        ],

        'levenshtein' => [
            'class' => 'HighSolutions\LaravelSearchy\SearchDrivers\LevenshteinSearchDriver',
        ],

    ],

];
