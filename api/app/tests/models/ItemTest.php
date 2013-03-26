<?php

/**
 * This class tests the item model
 * 
 * @group models
 * @group items
 */
class ItemTest extends TestCase 
{

    public function testTesterWorks()
    {
        $this->assertTrue(True);
        $mock = \Mockery::mock('something');
        $mock->shouldReceive('test')->once()->andReturn('works');
        $this->assertEquals('works', $mock->test());
    }

    /**
     * @group failing 
     */
    public function testFailingTests()
    {
        $this->assertFalse(True);
    }

}
