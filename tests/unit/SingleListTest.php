<?php
namespace Unit;

use Fengshuang\Demo\SingleList;

class SingleListTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testRevList()
    {
        $ls = [-1, 0, 1, 3, 5, 7, 9];
        $head = SingleList::init($ls);

        $this->tester->assertEquals($head->val, -1);
        $this->tester->assertEquals($head->next->val, 0);

        $newHead = SingleList::revList($head);

        $this->tester->assertEquals($newHead->val, 9);
        $this->tester->assertEquals($newHead->next->val, 7);
    }

    public function testIsIntersect()
    {
        $ls = [-1, 0, 1, 3, 5, 7, 9];
        $head1 = SingleList::init($ls);

        $head2 = SingleList::init($ls);

        $head3 = SingleList::init($ls);

        $head3Tai = SingleList::getTaiNode($head3);
        $head3Tai->next = $head1;

        $head4 = SingleList::init($ls);

        $head4Tai = SingleList::getTaiNode($head4);
        $head4Tai->next = $head1;

        $this->tester->assertFalse(SingleList::isIntersect($head1, $head2));

        $this->tester->assertTrue(SingleList::isIntersect($head3, $head4));
    }
}
