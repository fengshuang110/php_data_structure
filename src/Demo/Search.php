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

    /**
     * @param String $s
     * @return String
     */
    public static function  longestPalindrome($s) {
        $str_len = strlen($s);
        if ($str_len <= 1) return $s;

        $start  = 0;  //开始截取位
        $offset = 0;  //长度

        for ($i = 0; $i < $str_len; $i ++) {
            $len1 = self::centerExpand($s, $str_len, $i, $i);
            $len2 = self::centerExpand($s, $str_len, $i, $i + 1);

            if ($len1 > $len2 && $len1 > $offset) {
                // 开始位置 = 当前坐标-回文长度的一半位置
                $start = $i - ($len1 - 1)/2;
                $offset = $len1;
            }

            if ($len1 <= $len2 && $len2 > $offset) {
                // 开始位置 = 回文长度的一半位置
                $start = $i - $len2/2 + 1;
                $offset = $len2;
            }
        }
        return substr($s, $start, $offset);
    }

    // 中心扩散
    public function centerExpand($str, $len, $left, $right)
    {
        while ( $left >= 0 && $right < $len && $str[$left] == $str[$right] ) {
            $right ++;
            $left --;
        }
        return $right - $left - 1;
    }

}
