<?php
namespace Test;
class Factorial
{

    public static function compute($number)
    {
        if ($number === 0) {
            return 1;
        }

        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial = $factorial * $i;
        }

        return $factorial;
    }

}