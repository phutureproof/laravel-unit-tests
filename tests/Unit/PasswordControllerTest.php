<?php

namespace Tests\Unit;

use App\Http\Controllers\PasswordController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PasswordControllerTest extends TestCase
{
    /**
     * @dataProvider passwordProvider
     */
    public function test_password_request($email, $password, $ip, $expected)
    {
        $postData = [
            'email' => $email,
            'password' => $password
        ];

        $headers = [
            'REMOTE_ADDR' => $ip
        ];

        $response = $this->post('/passwordHash', $postData, $headers);

        $response->assertJson(['status' => $expected]);
    }

    function passwordProvider()
    {
        // @formatter:off
        return [
            ['dale@here.com',   'testing', '127.0.0.1',   'success'],   // everything is correct
            ['dale@here.co.uk', 'testing', '127.0.0.1',   'error'],     // bad email
            ['dale@here.com',   'test',    '127.0.0.1',   'error'],     // bad password
            ['dale@here.com',   'testing', '192.168.1.1', 'error'],     // bad ip
        ];
        // @formatter:on
    }
}
