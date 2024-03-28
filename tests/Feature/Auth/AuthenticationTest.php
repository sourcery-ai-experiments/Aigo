<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_with_valid_credentials(): void
    {
        $user = User::factory()->create([
            'password' => bcrypt($password = 'password'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);
        
        $this->assertAuthenticatedAs($user);

        // Assert redirect based on user role
        if ($user->user_role === 'admin') {
            $response->assertRedirect(route('admin-dashboard', [], false));
        } elseif ($user->user_role === 'doctor') {
            //$response->assertRedirect(route('doctor-dashboard', [], false));
        } else {
            $response->assertRedirect(route('user-dashboard', [], false));
        }
    }


    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/logout');

        $response->assertRedirect('/');
        $this->assertGuest();
    }

    public function test_user_can_redirect_to_user_dashboard(): void
    {
        $user = User::factory()->create(['user_role' => 'user']);
        $userResponse = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $userResponse->assertRedirect(route('user-dashboard'));
    }

    public function test_admin_can_redirect_to_admin_dashboard(): void
    {
        $admin = User::factory()->create(['user_role' => 'admin']);
        $adminResponse = $this->post('/login', [
            'email' => $admin->email,
            'password' => 'password', // Assuming password is 'password' for all users
        ]);

        $adminResponse->assertRedirect(route('admin-dashboard'));
    }

    // public function test_doctor_can_redirect_to_doctor_dashboard(): void
    // {
    //     $doctor = User::factory()->create(['user_role' => 'doctor']);
    //     $doctorResponse = $this->post('/login', [
    //         'email' => $doctor->email,
    //         'password' => 'password',
    //     ]);

    //     $doctorResponse->assertRedirect(route('doctor-dashboard'));
    // }

    public function test_logout_destroys_authenticated_session(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)->post('/logout');

        $this->assertGuest();
        $this->assertFalse(Auth::check());
        $this->assertNull(Auth::user());
        $this->assertTrue(Session::has('_token'));
    }
}
