<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->super_admin()->create();
        User::factory()->cashier()->create();
        User::factory()->chef()->create();
        User::factory()->customer()->create();
    }
}
