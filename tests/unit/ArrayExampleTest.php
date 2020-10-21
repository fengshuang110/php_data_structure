<?php

namespace unit;


use Fengshuang\Demo\ArrayExample;

class ArrayExampleTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testMoney()
    {
        $result = ArrayExample::money([1], 2);
        codecept_debug($result);
        $result = ArrayExample::money([1, 2], 1);
        codecept_debug($result);
        $result = ArrayExample::money([1, 2, 3, 4, 5, 6, 7, 8], 3);
        codecept_debug($result);
    }

}