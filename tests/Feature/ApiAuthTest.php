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

        $response = $this->json('POST', '/api/login', [
            'email' => 'testUser@example.com',
            'password' => 'password111',
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'token',
            ]);
        //Laravelのサーバー上での認証情報をログアウトして解除
        \Auth::logout();
        // ログイン後に返却されたtokenを取得し、リクエストヘッダーにtokenを設定して、URL「'/api/logout'」にPOSTしてレスポンスを取得
        $token = $response->decodeResponseJson()['token'];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->json('POST', '/api/logout');
        // レスポンスのステータスコードが200であることを確認し、返却されたJSONに「logout」が含まれていることを確認
        $response->assertStatus(200)
            ->assertJsonStructure([
                'logout',
            ]);
        // データベースのログアウトしたemailを持つユーザーのapi_tokenがnullであることを確認
        $this->assertDatabaseHas('users', [
            'email' => 'testUser@example.com',
            'api_token' => null
        ]);
    }
}
