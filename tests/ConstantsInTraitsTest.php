<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\ConstantsInTraits\Example1Trait;
use Src\ConstantsInTraits\UseExample2TraitClass;
use Src\ConstantsInTraits\UseExample3TraitClass;
use Src\ConstantsInTraits\UseExample4TraitEnum;

class ConstantsInTraitsTest extends TestCase
{
    use Example1Trait;

    /**
     * @test
     * 基本使用範例一
     * 宣告在 trait 中的 const
     * 可以是 public, protected, private
     */
    public function case1()
    {
        $this->assertEquals('Got public flag 1', self::doFoo(1));
        $this->assertEquals('Got protected flag 2', self::doFoo(2));
        $this->assertEquals('Got private flag 3', self::doFoo(3));
    }

    /**
     * @test
     * 基本使用範例二
     * 可將 const 宣告在使用 trait 的 class
     * 但可以在 trait 中使用 const
     */
    public function case2()
    {
        $useExample2TraitClass = new UseExample2TraitClass();
        $this->assertEquals('const value : example_2_value', $useExample2TraitClass->tryIt());
    }

    /**
     * @test
     * 基本使用範例三
     * 可將 const 宣告在使用 interface
     * 但可以在 trait 中使用 const
     */
    public function case3()
    {
        $useExample3TraitClass = new UseExample3TraitClass();
        $this->assertEquals('const value : example_3_value', $useExample3TraitClass->tryIt());
    }

    /**
     * @test
     * 基本使用範例四
     * 在 enum 中使用 trait 的 const
     */
    public function case4()
    {
        $this->assertEquals('example_4_value', UseExample4TraitEnum::CaseA->value);
    }

}
