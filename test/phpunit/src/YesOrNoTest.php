<?php
namespace Test;
class YesOrNoTest extends \PHPUnit\Framework\TestCase
{

    public static function test_YesOrNo_Should_Return_True()
    {
        self::assertEquals(true, YesOrNo::yesNo('Yes'));
    }
}