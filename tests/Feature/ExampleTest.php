<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * A basic test example.
     */
    // public function test_the_application_returns_a_successful_response(): void
    // {
    //     $response = $this->get('/');
    //     $response->assertStatus(200);
    // }


    public function test_the_customer_page(): void
    {

        $response = $this->get('/customer');
        $response->assertStatus(200);
    }
    public function test_the_employee_page(): void
    {

        $response = $this->get('/employee');
        $response->assertStatus(200);
    }
    public function test_the_payment_page(): void
    {

        $response = $this->get('/payment');
        $response->assertStatus(200);
    }
    public function test_the_service_page(): void
    {

        $response = $this->get('/service');
        $response->assertStatus(200);
    }
}
