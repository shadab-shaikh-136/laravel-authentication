<?php

namespace Tests\Feature;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_login_and_access_dashboard(): void
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin@123'),
        ]);

        $response = $this->post('/admin/login', [
            'email' => 'admin@email.com',
            'password' => 'admin@123',
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertAuthenticatedAs(Admin::first(), 'admin');

        $this->get('/admin/dashboard')
            ->assertOk();
    }

    public function test_unauthenticated_admin_access_redirects_to_login(): void
    {
        $response = $this->from('/admin/dashboard')->get('/admin/dashboard');

        $response->assertRedirect('/login');
    }
}
