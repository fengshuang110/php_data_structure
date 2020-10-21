<?php

namespace Fengshuang\Demo;

class ArrayExample
{
    public static function money(array $ls, int $m)
    {
        if(empty($ls) || $m < 1) {
            return false;
        }
        if(count($ls) == 1) {
            return $ls[0];
        }

        if ($m == 1) {
            return end($ls);
        }

        while(count($ls) > 0) {
            if (count($ls) == 1) {
                return $ls[0];
            }
            for($i = 1; $i <= $m; $i++) {
                if($i != $m) {
                    $ls[] = $ls[$i -1];
                } else {
                    array_splice($ls, 0, $m);
                    codecept_debug($ls);
                    break;
                }
            }
        }
        
        return false;
    }
}