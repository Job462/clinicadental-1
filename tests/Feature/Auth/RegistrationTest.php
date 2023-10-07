<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
<<<<<<< HEAD
=======
use Livewire\Volt\Volt;
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

<<<<<<< HEAD
        $response->assertStatus(200);
=======
        $response
            ->assertSeeVolt('pages.auth.register')
            ->assertOk();
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    }

    public function test_new_users_can_register(): void
    {
<<<<<<< HEAD
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
=======
        $component = Volt::test('pages.auth.register')
            ->set('name', 'Test User')
            ->set('email', 'test@example.com')
            ->set('password', 'password')
            ->set('password_confirmation', 'password');

        $component->call('register');

        $component->assertRedirect(RouteServiceProvider::HOME);

        $this->assertAuthenticated();
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    }
}
