<?php

namespace Src\ConstantsInTraits;

class UseExample2TraitClass
{
    use Example2Trait;

    public const EXAMPLE_2_VALUE = 'example_2_value';

    public function tryIt(): string
    {
        return self::doFoo();
    }
}
