<?php

namespace HighSolutions\LaravelSearchy\SearchDrivers;

class SimpleSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \HighSolutions\LaravelSearchy\Matchers\ExactMatcher::class                 => 100,
        \HighSolutions\LaravelSearchy\Matchers\StartOfStringMatcher::class         => 50,
        \HighSolutions\LaravelSearchy\Matchers\InStringMatcher::class              => 30,
    ];
}
