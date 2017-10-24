<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\NewExampleServiceController;
use App\Services\NewExampleService;

class NewExampleServiceControllerTest extends TestCase
{
    /** @var  NewExampleServiceController */
    public $SUT;

    public function test_controller_recieves_service()
    {
        $response = $this->get('/NewExampleServiceController');
        $response->assertStatus(400);
    }

    public function test_controller_calls_service_method()
    {
        $mock = $this->getMockBuilder(NewExampleService::class)->setMethods(['setFoo', 'getFoo'])->getMock();
        $mock->expects($this->once())->method('setFoo');
        $mock->expects($this->once())->method('getFoo');
        $this->SUT = new NewExampleServiceController($mock);
        $this->SUT->useServiceMethod('test');
    }
}
