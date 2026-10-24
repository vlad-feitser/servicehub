<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;

class DashboardTest extends TestCase
{
    public function test_admin_dashboard_page_is_displayed(): void
    {
        $response = $this->get(route('admin.dashboard'));

        $response->assertOk();

        $response->assertSee('Dashboard');
    }
}
