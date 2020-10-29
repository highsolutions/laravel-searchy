<?php

namespace HighSolutions\LaravelSearchy\SearchDrivers;

class FuzzySearchUnicodeDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \HighSolutions\LaravelSearchy\Matchers\ExactMatcher::class                        => 100,
        \HighSolutions\LaravelSearchy\Matchers\StartOfStringMatcher::class                => 50,
        \HighSolutions\LaravelSearchy\Matchers\AcronymUnicodeMatcher::class               => 42,
        \HighSolutions\LaravelSearchy\Matchers\ConsecutiveCharactersUnicodeMatcher::class => 40,
        \HighSolutions\LaravelSearchy\Matchers\StartOfWordsMatcher::class                 => 35,
        \HighSolutions\LaravelSearchy\Matchers\StudlyCaseUnicodeMatcher::class            => 32,
        \HighSolutions\LaravelSearchy\Matchers\InStringMatcher::class                     => 30,
        \HighSolutions\LaravelSearchy\Matchers\TimesInStringMatcher::class                => 8,
  ];
}
