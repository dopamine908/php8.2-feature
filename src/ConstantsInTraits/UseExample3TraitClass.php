<?php

namespace Src\ConstantsInTraits;

class UseExample3TraitClass implements Example3Interface
{
    use Example3Trait;

    public function tryIt(): string
    {
        return self::doFoo();
    }
}
