<?php

class SingleListTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testRevList()
    {
        $ls = [-1, 0, 1, 3, 5, 7, 9];
        $head = \Fengshuang\Demo\SingleList::init($ls);

        $this->tester->assertEquals($head->val, -1);
        $this->tester->assertEquals($head->next->val, 0);

        $newHead = \Fengshuang\Demo\SingleList::revList($head);

        $this->tester->assertEquals($newHead->val, 9);
        $this->tester->assertEquals($newHead->next->val, 7);
    }
}
