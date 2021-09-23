<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RolesAccessTest extends TestCase
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

    public function user_must_login_to_access_to_admin_dashboard()
    {
        $this->get(route('admin.dashboard'))
             ->assertRedirect('login');
    }

    /** @test */
    public function admin_can_access_to_admin_dashboard()
    {
        $adminUser = factory(User::class)->create();

        $adminUser->assignRole('Super Admin');

        $this->actingAs($adminUser);

        $response = $this->get(route('admin.dashboard'));

        $response->assertOk();
    }

    /** @test */
    public function users_cannot_access_to_admin_dashboard()
    {
        $user = factory(User::class)->create();

        $user->assignRole('user');

        $this->actingAs($user);
        $response = $this->get(route('admin.dashboard'));

        $response->assertForbidden();
    }

    public function user_can_access_to_home()
    {
        $user = factory(User::class)->create();
        $user->assignRole('user');
        $this->actingAs($user);
        $response = $this->get(route('home'));
        $response->assertOk();
    }
    public function admin_can_access_to_home()
    {
        $adminUser = factory(User::class)->create();
        $adminUser->assignRole('Super Admin');
        $this->actingAs($adminUser);
        $response = $this->get(route('home'));
        $response->assertOk();
    }
}
