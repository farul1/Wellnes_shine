<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 10 pengguna non-admin
        User::factory(10)->create([
            'is_admin' => 0,
        ]);
    }
}
