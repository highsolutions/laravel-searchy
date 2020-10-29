<?php

namespace HighSolutions\LaravelSearchy\Interfaces;

interface SearchDriverInterface
{
    public function query($searchString);

    public function select(/* $columns */);

    public function get();
}
