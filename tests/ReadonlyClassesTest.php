<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\ReadonlyClasses\ReadonlyClassExample;

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
}
