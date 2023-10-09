<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
<<<<<<< HEAD
=======
use Livewire\Volt\Volt;
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_screen_can_be_rendered(): void
    {
        $response = $this->get('/forgot-password');

<<<<<<< HEAD
        $response->assertStatus(200);
=======
        $response
            ->assertSeeVolt('pages.auth.forgot-password')
            ->assertStatus(200);
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
    }

    public function test_reset_password_link_can_be_requested(): void
    {
        Notification::fake();

        $user = User::factory()->create();

<<<<<<< HEAD
        $this->post('/forgot-password', ['email' => $user->email]);
=======
        Volt::test('pages.auth.forgot-password')
            ->set('email', $user->email)
            ->call('sendPasswordResetLink');
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915

        Notification::assertSentTo($user, ResetPassword::class);
    }

    public function test_reset_password_screen_can_be_rendered(): void
    {
        Notification::fake();

        $user = User::factory()->create();

<<<<<<< HEAD
        $this->post('/forgot-password', ['email' => $user->email]);
=======
        Volt::test('pages.auth.forgot-password')
            ->set('email', $user->email)
            ->call('sendPasswordResetLink');
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) {
            $response = $this->get('/reset-password/'.$notification->token);

<<<<<<< HEAD
            $response->assertStatus(200);
=======
            $response
                ->assertSeeVolt('pages.auth.reset-password')
                ->assertStatus(200);
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915

            return true;
        });
    }

    public function test_password_can_be_reset_with_valid_token(): void
    {
        Notification::fake();

        $user = User::factory()->create();

<<<<<<< HEAD
        $this->post('/forgot-password', ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
            $response = $this->post('/reset-password', [
                'token' => $notification->token,
                'email' => $user->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);

            $response->assertSessionHasNoErrors();
=======
        Volt::test('pages.auth.forgot-password')
            ->set('email', $user->email)
            ->call('sendPasswordResetLink');

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
            $component = Volt::test('pages.auth.reset-password', ['token' => $notification->token])
                ->set('email', $user->email)
                ->set('password', 'password')
                ->set('password_confirmation', 'password');

            $component->call('resetPassword');

            $component
                ->assertRedirect('/login')
                ->assertHasNoErrors();
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915

            return true;
        });
    }
}
