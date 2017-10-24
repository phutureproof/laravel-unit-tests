<?php

namespace Tests\Unit;

use Mockery\CountValidator\Exact;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\NewExampleService;

class NewExampleServiceTest extends TestCase
{
    /** @var NewExampleService */
    public $SUT;

    public function setUp()
    {
        parent::setUp();
        $this->SUT = new NewExampleService();
    }

    public function test_service_has_properties()
    {
        $this->assertObjectHasAttribute('foo', $this->SUT);
        $this->assertObjectHasAttribute('bar', $this->SUT);
    }

    public function test_service_sets_and_gets_data()
    {
        $this->SUT->setFoo('test');
        $this->assertTrue($this->SUT->getFoo() === 'test');

        $this->SUT->setBar('test');
        // failing test
        $this->assertTrue($this->SUT->getBar() === 'this should break!');

    }
}
