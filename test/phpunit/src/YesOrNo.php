<?php
namespace Test;

class YesOrNo
{
    /**
     * @param $value
     * @return bool
     */
    public static function yesNo($value)
    {
        if ($value === 'Yes ') {
            return true;
        }

        return false;
    }
}