<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        // Generate fake user data
        $userData = [
            'username' => $this->faker->userName,
            'password' => $this->faker->password,
            'password_confirmation' => $this->faker->password,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telepon' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
        ];
    
        // Post the registration form
        $response = $this->post('/register', $userData);
    
        // Assert that the registration was successful (status 302 for redirect)
        $response->assertStatus(Response::HTTP_FOUND);
    
        // Assert that the user is authenticated after registration
        $this->assertAuthenticated();
    
        // Assert that the user is redirected to the dashboard
        $response->assertRedirect(route('dashboard'));
    
        // Assert that the user data is correctly stored in the database
        $this->assertDatabaseHas('users', [
            'username' => $userData['username'],
            'name' => $userData['name'],
            'email' => $userData['email'],
            'telepon' => $userData['telepon'],
            'alamat' => $userData['alamat'],
            'gender' => $userData['gender'],
        ]);
    
        // Assert that the password is hashed
        $user = User::where('email', $userData['email'])->first();
        $this->assertTrue(Hash::check($userData['password'], $user->password));
    }
    
}
