<?php
namespace Unit;

use Fengshuang\Demo\Search;

class SearchTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testBinarySearch()
    {
        $ls = [-1, 0, 1, 3, 5, 7, 9];

        $this->tester->assertFalse(Search::binarySearch($ls, -2));
        $this->tester->assertFalse(Search::binarySearch($ls, 10));
        $this->tester->assertEquals(Search::binarySearch($ls, 9), count($ls) - 1);
        $this->tester->assertEquals(Search::binarySearch($ls, -1), 0);
    }

    public function testRecursionBinarySearch()
    {
        $ls = [-1, 0, 1, 3, 5, 7, 9];
        $low = 0;
        $high = count($ls) - 1;

        $this->tester->assertFalse(Search::recursionBinarySearch($ls, -2, $low, $high));
        $this->tester->assertFalse(Search::recursionBinarySearch($ls, 10, $low, $high));
        $this->tester->assertEquals(Search::recursionBinarySearch($ls, 9, $low, $high), count($ls) - 1);
        $this->tester->assertEquals(Search::recursionBinarySearch($ls, -1, $low, $high), 0);
    }

    public function testLongestPalindrome()
    {
        $res = Search::longestPalindrome('abac');
        codecept_debug($res);
    }
}
