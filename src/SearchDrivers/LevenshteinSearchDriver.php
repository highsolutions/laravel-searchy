<?php

namespace HighSolutions\LaravelSearchy\SearchDrivers;

class LevenshteinSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \HighSolutions\LaravelSearchy\Matchers\LevenshteinMatcher::class           => 100,
    ];
}
