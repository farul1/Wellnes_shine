<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nik' => '1204220018',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('farulp123'),
            'is_admin' => 1,
            'alamat' => 'Jl. ketintang No. 3',
            'tlp' => '082257663431',
            'tglLahir' => '2004-05-09',
            'role' => 1,
            'is_active' => 1,
            'foto' => 'default.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
