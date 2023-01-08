<?php

namespace Src\ConstantsInTraits;

trait Example3Trait
{
    private function doFoo(): string
    {
        return "const value : " . self::EXAMPLE_3_VALUE;
    }
}
