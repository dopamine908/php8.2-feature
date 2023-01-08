<?php

namespace Src\ConstantsInTraits;

enum UseExample4TraitEnum: string
{
    use Example4Trait;

    case CaseA = self::EXAMPLE_4_VALUE;
}
