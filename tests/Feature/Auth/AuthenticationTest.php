<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
<<<<<<< HEAD
=======
use Livewire\Volt\Volt;
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

<<<<<<< HEAD
        $response->assertStatus(200);
=======
        $response
            ->assertSeeVolt('pages.auth.login')
            ->assertOk();
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->create();

<<<<<<< HEAD
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
=======
        $component = Volt::test('pages.auth.login')
            ->set('email', $user->email)
            ->set('password', 'password');

        $component->call('login');

        $component
            ->assertHasNoErrors()
            ->assertRedirect(RouteServiceProvider::HOME);

        $this->assertAuthenticated();
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create();

<<<<<<< HEAD
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);
=======
        $component = Volt::test('pages.auth.login')
            ->set('email', $user->email)
            ->set('password', 'wrong-password');

        $component->call('login');

        $component
            ->assertHasErrors()
            ->assertNoRedirect();
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915

        $this->assertGuest();
    }

<<<<<<< HEAD
=======
    public function test_navigation_menu_can_be_rendered(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/dashboard');

        $response
            ->assertSeeVolt('layout.navigation')
            ->assertOk();
    }

>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

<<<<<<< HEAD
        $response = $this->actingAs($user)->post('/logout');

        $this->assertGuest();
        $response->assertRedirect('/');
=======
        $this->actingAs($user);

        $component = Volt::test('layout.navigation');

        $component->call('logout');

        $component
            ->assertHasNoErrors()
            ->assertRedirect('/');

        $this->assertGuest();
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    }
}
