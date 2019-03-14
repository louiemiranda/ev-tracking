<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BackendTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    public function testBackendTracking()
    {
        $response = $this->get('/api/backend/tracking');

        $response->assertStatus(200);
    }

    public function testBackendTrackingNotFound()
    {
        $response = $this->get('/api/backend/notfound/1');

        $response->assertStatus(404);
    }
}
