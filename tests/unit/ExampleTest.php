<?php

class ExampleTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testAll()
    {
        $bool = true;
        $this->tester->assertTrue($bool);
        $this->tester->assertNotFalse($bool);
    }
}
