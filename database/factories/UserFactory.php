<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function super_admin(): static
    {
        $role = Role::query()->firstOrCreate(['name' => 'super_admin']);

        return $this->state(fn(array $attributes) => [
            'email' => 'superadmin@gmail.com',
            'name' => 'super admin'
        ])->afterCreating(function(User $user) use($role) {
            $user->assignRole($role);
        });
    }

    public function cashier(): static
    {
        $role = Role::query()->firstOrCreate(['name' => 'cashier']);

        return $this->state(fn(array $attributes) => [
            'email' => 'cashier@gmail.com',
            'name' => 'cashier'
        ])->afterCreating(function(User $user) use($role) {
            $user->assignRole($role);
        });
    }

    public function chef(): static
    {
        $role = Role::query()->firstOrCreate(['name' => 'chef']);

        return $this->state(fn(array $attributes) => [
            'email' => 'chef@gmail.com',
            'name' => 'chef'
        ])->afterCreating(function(User $user) use($role) {
            $user->assignRole($role);
        });
    }

    public function customer(): static
    {
        $role = Role::query()->firstOrCreate(['name' => 'customer']);

        return $this->state(fn(array $attributes) => [
            'email' => 'customer@gmail.com',
            'name' => 'customer'
        ])->afterCreating(function(User $user) use($role) {
            $user->assignRole($role);
        });
    }
}
