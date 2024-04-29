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
        $response->assertRedirect(route('login'));
        
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

    public function test_registration_validation_fails_if_missing_required_fields()
    {
        $response = $this->post('/register', []);

        $response->assertSessionHasErrors(['username', 'password', 'name', 'email', 'telepon', 'gender']);
    }

    public function test_registration_validation_fails_if_email_invalid()
    {
        $userData = [
            'username' => $this->faker->userName,
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'name' => $this->faker->name,
            'email' => 'invalid_email',
            'telepon' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'gender' => $this->faker->randomElement(['male', 'female']),
        ];

        $response = $this->post('/register', $userData);

        $response->assertSessionHasErrors(['email']);
    }

    public function test_registration_fails_if_duplicate_username()
    {
        $existingUser = User::factory()->create();

        $userData = [
            'username' => $existingUser->username,
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telepon' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'gender' => $this->faker->randomElement(['male', 'female']),
        ];

        $response = $this->post('/register', $userData);

        $response->assertSessionHasErrors(['username']);
    }

    public function test_registration_fails_if_duplicate_email()
    {
        $existingUser = User::factory()->create();

        $userData = [
            'username' => $this->faker->userName,
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'name' => $this->faker->name,
            'email' => $existingUser->email,
            'telepon' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'gender' => $this->faker->randomElement(['male', 'female']),
        ];

        $response = $this->post('/register', $userData);

        $response->assertSessionHasErrors(['email']);
    }

    
    
}
