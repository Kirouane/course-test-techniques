<?php
namespace Test;
class Factorial
{

    public static function compute($number)
    {
        return self::compute1($number);
    }


    public static function compute1($number)
    {
        if ($number === 0) {
            return 1;
        }

        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        return $factorial;
    }

    public static function compute2($number)
    {
        if ($number === 0) {
            return 1;
        }

        return $number * self::compute2($number - 1);
    }
}