<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\Services\DalesExampleService;

class DalesExampleServiceTest extends TestCase
{
    /** @var DalesExampleService */
    public $SUT;

    public function setUp()
    {
        parent::setUp();
        $this->SUT = new DalesExampleService();
    }

    public function test_doSomething_returns_true()
    {
        $this->assertTrue($this->SUT->doSomething());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 99
     * @expectedExceptionMessage Something went wrong
     */
    public function test_exception_gets_thrown()
    {
        $this->SUT->throwSomething();
    }

}
