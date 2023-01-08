<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\ConstantsInTraits\Example1Trait;

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

}
