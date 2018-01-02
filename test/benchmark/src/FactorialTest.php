<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase
{
    public function computeProvider()
    {
        return [
            [0, 1],
            [1, 1],
            [2, 2],
            [3, 6],
            [4, 24]
        ];
    }

    /**
     * @dataProvider computeProvider
     * @test
     */
    public function compute1($number, $expected)
    {
        self::assertSame($expected, Factorial::compute($number));
    }
}