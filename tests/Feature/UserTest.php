<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function test_login_redirect_to_dashboard()
    {
        // Authenticate a user (adjust the code based on your authentication method)
        User::factory()->create([
            'email' => 'test@test.com',
            'password' => bcrypt('password'),

        ]);

        $response = $this->post('/login', [
            'email' => 'test@test.com',
            'password' => 'password',
        ]);

        $response->assertStatus(200);
    }

    public function test_auth_user_can_access_dashboard()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
    }
    public function test_auth_user_can_access_customer()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/customer');
        $response->assertStatus(200);
    }
    public function test_auth_user_can_access_employee()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/employee');
        $response->assertStatus(200);
    }
    public function test_auth_user_can_access_service()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/service');
        $response->assertStatus(200);
    }
    public function test_auth_user_can_access_payment()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/payment');
        $response->assertStatus(200);
    }
}
