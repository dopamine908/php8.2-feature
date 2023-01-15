<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\DeprecateDynamicProperties\Cat;
use Src\DeprecateDynamicProperties\Dog;
use Src\DeprecateDynamicProperties\User;

class DeprecateDynamicPropertiesTest extends TestCase
{
    /**
     * @test
     * php 8.2 開始
     * 對於 class field 的動態寫入開始會有 warning
     * 並打算在 php 9 廢除動態寫入
     */
    public function example1()
    {
        $user = new User();

        /**
         * 已經宣告過的 $name 屬性可以被寫入
         */
        $user->name = "foo";

        /**
         * 沒有宣告過的 $phone 屬性可以被寫入
         * 但是會給 Deprecated 提示
         *
         * PHP <= 8.1: Silently creates dynamic $user->nane property.
         * PHP    8.2: Raises deprecation warning, still creates dynamic property.
         * PHP    9.0: Throws Error exception.
         */
        $user->phone = "0912345678";


        $this->assertEquals("foo", $user->name);
        $this->assertEquals("0912345678", $user->phone);
    }

    /**
     * @test
     * 在 php 8.2 中如果想對 class 做動態寫入屬性
     * 但又想要忽落 warning 的話
     * 可以在 class 上方加上 #[AllowDynamicProperties]
     */
    public function example2()
    {
        $dog = new Dog();
        $dog->name = 'dog_name';
        $this->assertEquals("dog_name", $dog->name);
    }

    /**
     * @test
     * 想要還有另外一個方法
     * 複寫 __get()/__set() 魔術方法
     * 給設定跟取用一個預設邏輯
     * 這樣在動態寫入屬性的時候就會先去跑 __set() 的寫入邏輯
     * 而不會被認定為 warning
     */
    public function example3()
    {
        $cat = new Cat();
        $cat->name = "cat_name";
        $this->assertEquals("cat_name", $cat->name);
    }

}
