<?php

namespace Tests\Unit;

use App\Services\DalesExampleService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\PagesController;

class PagesControllerTest extends TestCase
{
    /**
     * @var \App\Http\Controllers\PagesController
     */
    public $SUT;

    public function setUp()
    {
        parent::setUp();
        $this->SUT = new PagesController(new DalesExampleService());
    }

    public function testPagesControllerIndexShowsPage()
    {
        $response = $this->get('/test');
        $response->assertStatus(200);
        $response->assertSee('test');
    }

    public function testPagesControllerSomeFunctionIsWorking()
    {
        $a = 10.5;
        $b = 100;
        $total = $a + $b;

        $this->assertTrue($total === $this->SUT->someFunction($a, $b));
    }

    public function testServiceMethodIsCalled()
    {
        $mock = $this->getMockBuilder(DalesExampleService::class)->setMethods(['doSomething'])->getMock();
        $mock->expects($this->once())->method('doSomething');
        $this->SUT = new PagesController($mock);
        $this->SUT->someOtherFunction();
    }
}
