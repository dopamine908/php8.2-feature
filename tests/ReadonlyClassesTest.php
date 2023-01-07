<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\ReadonlyClasses\ReadonlyClassExample;
use Src\ReadonlyClasses\Son;

class ReadonlyClassesTest extends TestCase
{
    /**
     * @test
     * 基礎性質
     * 不可復蓋 readonly class 原先就有的 field
     * 不可動態賦予新的 field
     */
    public function case1()
    {
        $readonlyClassExample = new ReadonlyClassExample();

//        不可復蓋 readonly class 原先就有的 field
//        $readonlyClassExample->bar = 1;
//        Fatal Error: Uncaught Error: Cannot modify readonly property Foo::$bar

//        不可動態賦予新的 field
//        $readonlyClassExample->baz = 1;
//        Fatal Error: Uncaught Error: Cannot create dynamic property Foo::$baz

        $this->assertTrue(true);
    }

    /**
     * @test
     * 繼承相關的限制
     * 兩個 readonly class 之間有繼承關係時
     * 必須兩個都是 readonly class
     * 不能只有一個是 readonly class 另外一個不是
     */
    public function case2()
    {
        $son = new Son();
        $this->assertTrue(true);

//        readonly class Father {}
//        class Son extends Father {}
// Fatal error: Non-readonly class Son cannot extend readonly class Father

//        class Father {}
//        readonly class Son extends Father {}
// Fatal error: Readonly class Son cannot extend non-readonly class Father
    }
}
