<?php
namespace Test;
class YesOrNoTest extends \PHPUnit\Framework\TestCase
{

    public static function testNo()
    {
        self::assertFalse(YesOrNo::yesNo('No'));
    }
}