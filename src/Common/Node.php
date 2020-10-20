<?php
namespace Fengshuang\Common;

class Node
{
    public $val;
    public $next = null;
    public $pre = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}
