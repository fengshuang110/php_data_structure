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

    public static function getTaiNode(Node $head)
    {
        while ($head) {
            if(!$head->next) {
               return $head;
            }

            $head = $head->next;
        }

        return null;
    }

    public static function isIntersect(Node $head1, Node $head2)
    {
        while ($head1) {
            if(!$head1->next) {
                break;
            }

            $head1 = $head1->next;
        }

        while ($head2) {
            if(!$head2->next) {
                break;
            }
            $head2 = $head2->next;
        }

        return $head1 === $head2;
    }

    public static function getIntersectNode(Node $head1, Node $head2)
    {

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
