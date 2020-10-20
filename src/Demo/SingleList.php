<?php

namespace Fengshuang\Demo;

use Fengshuang\Common\Node;

class SingleList
{
    public static function init(array $la)
    {
        $head = $p = new Node($la[0]);

        foreach ($la as $index => $value) {
            if ($index == 0) {
                continue;
            }
            $node = new Node($value);
            $p->next = $node;
            $p->pre = null;
            $p = $node;
        }

        return $head;
    }

    public static function revList(Node $head)
    {
        $pre = null;
        while ($head) {
            $next = $head->next;
            $head->next = $pre;
            $pre = $head;
            if ($next) {
                $head = $next;
            } else {
                return $head;
            }
        }
    }
}
