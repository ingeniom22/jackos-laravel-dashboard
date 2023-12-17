<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function test_dashboard_screen(): void
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }
    public function test_transaction_screen(): void
    {
        $response = $this->get('/transaction');

        $response->assertStatus(200);
    }
    public function test_employee_screen(): void
    {
        $response = $this->get('/employee');

        $response->assertStatus(200);
    }
    public function test_customer_screen(): void
    {
        $response = $this->get('/customer');

        $response->assertStatus(200);
    }
}
