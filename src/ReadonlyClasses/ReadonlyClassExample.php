<?php

namespace Src\ReadonlyClasses;

readonly class ReadonlyClassExample
{
    public int $bar;

    /**
     * 宣告的 field 必須要有型別宣告
     */
    // public $notAllow1;
    // Fatal error: Readonly property Foo::$bar must have type

    /**
     * 宣告的 field 不可以是 static
     */
    // public static int $notAllow2;
    // Fatal error: Readonly class Foo cannot declare static properties
    public function __construct()
    {
        $this->bar = 1;
    }
}
