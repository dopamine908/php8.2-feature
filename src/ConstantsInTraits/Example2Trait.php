<?php

namespace Src\ConstantsInTraits;

trait Example2Trait
{
    private function doFoo(): string
    {
        return "const value : " . self::EXAMPLE_2_VALUE;
    }
}
