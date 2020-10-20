<?php

namespace Fengshuang\Demo;

class Search
{
    public static function binarySearch(array $la, $value)
    {
        $low = 0;
        $high = count($la)-1;
        while ($low <= $high) {
            $mid = intval(($low+$high)/2);
            if ($la[$mid] == $value) {
                return $mid;
            } elseif ($value<$la[$mid]) {
                $high = $mid-1;
            } else {
                $low = $mid+1;
            }
        }
        return false;
    }

    public static function recursionBinarySearch(array $la, $value, $low = 0, $high = 0)
    {
        if ($low > $high) {
            return false;
        }
        $middle = intval(($low + $high) / 2);

        if ($la[$middle] == $value) {
            return $middle;
        }

        if ($la[$middle] < $value) {
            $low = $middle + 1;
            return self::recursionBinarySearch($la, $value, $low, $high);
        } else {
            $high = $middle - 1;
            return self::recursionBinarySearch($la, $value, $low, $high);
        }
    }
}
