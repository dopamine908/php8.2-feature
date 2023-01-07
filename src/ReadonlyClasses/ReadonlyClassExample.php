<?php

namespace Src\ReadonlyClasses;

readonly class ReadonlyClassExample
{
    public int $bar;

    public function __construct()
    {
        $this->bar = 1;
    }
}
