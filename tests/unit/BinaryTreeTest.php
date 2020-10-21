<?php
namespace Unit;

use Fengshuang\Demo\BinaryTree;

class BinaryTreeTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testBuildTree()
    {
        $ls = [-1, 0, 1, 3, 5, 7, 9];
        $root = BinaryTree::buildTree($ls, 0);

        BinaryTree::beforeForeach($root);
        BinaryTree::midForeach($root);
        BinaryTree::afterForeach($root);

        codecept_debug(BinaryTree::maxDepth($root));
    }
}
