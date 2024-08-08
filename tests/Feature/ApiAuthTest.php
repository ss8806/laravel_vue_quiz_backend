<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Support\Str;

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

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_user()
    {
        $token = Str::random(80);

        $user = factory(\App\User::class)->create([
            'api_token' => hash('sha256', $token),
        ]);

        $response = $this->json('GET', "/api/user?api_token={$token}");

        $this->assertEquals($user->toArray(), $response->decodeResponseJson());
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_ranking()
    {
        $token = Str::random(80);

        $user = factory(\App\User::class)->create([
            'api_token' => hash('sha256', $token),
        ]);

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->json('POST', '/api/ranking', [
            'correctRatio' => 5,
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('rankings', [
            'percentage_correct_answer' => (string) 50,
            'user_id' => (string) $user->id,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_mypage()
    {
        $token = Str::random(80);

        $user = factory(\App\User::class)->create([
            'api_token' => hash('sha256', $token),
        ]);

        $response = $this->json('GET', "/api/mypage?api_token={$token}");

        $response->assertStatus(200)
            ->assertJsonStructure([
                'percentage_correct_answer',
                'created_at'
            ]);
    }
}
