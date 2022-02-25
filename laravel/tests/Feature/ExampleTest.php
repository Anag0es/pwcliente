<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function a_rota_TeladeLogin_esta_implementada(){
        $response = $this ->get('/teladelogin');

        $response ->assertStatus(200);
    }

    
    public function a_rota_aprenderlibras_esta_implementada(){
        $response = $this ->get('/aprenderlibras');

        $response ->assertStatus(200);
    }
}
