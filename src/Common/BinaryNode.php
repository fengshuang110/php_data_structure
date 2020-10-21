<?php
namespace Fengshuang\Common;

class BinaryNode
{
    public $val;
    public $left = null;
    public $right = null;

    public function __construct($val, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}
