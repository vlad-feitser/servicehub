<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class HealthTest extends TestCase
{
    public function test_health_endpoint_returns_ok_status(): void
    {
        $response = $this->getJson(route('api.health'));

        $response->assertOk();

        $response->assertExactJson([
            'status' => 'ok',
        ]);
    }
}
