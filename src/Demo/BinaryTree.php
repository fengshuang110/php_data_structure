<?php

namespace Fengshuang\Demo;

use Fengshuang\Common\BinaryNode;

class BinaryTree
{
    public static function buildTree($ls, $n = 0)
    {
        // [-1, 0, 1, 3, 5, 7, 9]
        if (count($ls) == 0)
            return null;
        else {
            if ($n < count($ls)) {
                $l = $n * 2 + 1;
                $r = $n * 2 + 2;
                return new BinaryNode($ls[$n], self::buildTree($ls, $l), self::buildTree($ls, $r));
            } else
                return null;
        }
    }


    public static function maxDepth($root) {
        if ($root==null) {
            return 0;
        }
        /* @var $root BinaryNode */

        return max(self::maxDepth($root->left) + 1, self::maxDepth($root->right) + 1);
    }

    public static function beforeForeach($root)
    {
        if($root == null) {
            return ;
        }
        codecept_debug($root->val);
        self::beforeForeach($root->left);
        self::beforeForeach($root->right);
    }

    public static function midForeach($root, $ls = [])
    {
        if($root == null) {
            return ;
        }
        self::midForeach($root->left, $ls);
        codecept_debug($root->val);
        self::midForeach($root->right, $ls);
    }

    public static function afterForeach($root, $ls = [])
    {
        if($root == null) {
            return ;
        }
        self::afterForeach($root->left, $ls);
        self::afterForeach($root->right, $ls);
        codecept_debug($root->val);
    }
}