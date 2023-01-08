<?php

namespace Src\ConstantsInTraits;

trait Example1Trait
{
    public const FLAG_1 = 1;
    protected const FLAG_2 = 2;
    private const FLAG_3 = 3;

    public function doFoo(int $flags): string
    {
        if ($flags === self::FLAG_1) {
            return 'Got public flag 1';
        }
        if ($flags === self::FLAG_2) {
            return 'Got protected flag 2';
        }
        if ($flags === self::FLAG_3) {
            return 'Got private flag 3';
        }
        return '';
    }
}
