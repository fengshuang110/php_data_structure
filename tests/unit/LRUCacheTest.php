<?php
namespace Unit;

use Fengshuang\Demo\LRUCache;

class LRUCacheTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testAll()
    {
        $obj = new LRUCache(5);

        for($i = 1; $i <= 10; $i++) {
            $key = 'key' . $i;
            $obj->put($key, 'value' . $i);
        }
        for($i = 1; $i <= 10; $i++) {
            $key = 'key' . $i;
            codecept_debug($obj->get($key));
        }
    }
}
