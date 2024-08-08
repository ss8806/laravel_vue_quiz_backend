<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ApiAuthTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth()
    {

        $data = [
            'name' => 'test',
            'email' => 'testUser@example.com',
            'password' => 'password111',
            'password_confirmation' => 'password111',
        ];

        $response = $this->json('POST', '/api/register', $data);

        $response->assertStatus(200);

        $this->assertDatabaseHas('users', [
            'name' => 'test',
            'email' => 'testUser@example.com',
        ]);
    }
}
