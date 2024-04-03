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

    public function test_new_user_can_register()
    {
        $userData = [
            'username' => $this->faker->userName,
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telepon' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'gender' => $this->faker->randomElement(['male', 'female']),
        ];

        $response = $this->post('/register', $userData);

        $response->assertStatus(302); // Check if redirected after successful registration
        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticated(); // Check if user is authenticated after registration
        
        $this->assertDatabaseHas('users', [
            'username' => $userData['username'],
            'email' => strtolower($userData['email']),
            'telepon' => $userData['telepon'],
            'alamat' => $userData['alamat'],
            'gender' => $userData['gender'],
        ]);

        // Assert that the password is hashed
        $user = User::where('email', $userData['email'])->first();
        $this->assertTrue(Hash::check($userData['password'], $user->password));
    }
    
}
