<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
<<<<<<< HEAD
=======
use Livewire\Volt\Volt;
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
use Tests\TestCase;

class PasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    public function test_confirm_password_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/confirm-password');

<<<<<<< HEAD
        $response->assertStatus(200);
=======
        $response
            ->assertSeeVolt('pages.auth.confirm-password')
            ->assertStatus(200);
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    }

    public function test_password_can_be_confirmed(): void
    {
        $user = User::factory()->create();

<<<<<<< HEAD
        $response = $this->actingAs($user)->post('/confirm-password', [
            'password' => 'password',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
=======
        $this->actingAs($user);

        $component = Volt::test('pages.auth.confirm-password')
            ->set('password', 'password');

        $component->call('confirmPassword');

        $component
            ->assertRedirect('/dashboard')
            ->assertHasNoErrors();
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    }

    public function test_password_is_not_confirmed_with_invalid_password(): void
    {
        $user = User::factory()->create();

<<<<<<< HEAD
        $response = $this->actingAs($user)->post('/confirm-password', [
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();
=======
        $this->actingAs($user);

        $component = Volt::test('pages.auth.confirm-password')
            ->set('password', 'wrong-password');

        $component->call('confirmPassword');

        $component
            ->assertNoRedirect()
            ->assertHasErrors('password');
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    }
}
