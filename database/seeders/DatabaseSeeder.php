<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'nama_pengguna' => 'Superadmin',
            'password' => Hash::make("bismillah"),
            'foto_profile' => 'user.png',
            'role' => 'Admin'
        ]);

        DB::table('users')->insert([
            'name' => 'penggunacalo',
            'email' => 'pengguna@gmail.com',
            'nama_pengguna' => 'Pengguna Calo',
            'password' => Hash::make("bismillah"),
            'foto_profile' => 'user.png',
            'role' => 'Pengguna'
        ]);
    }
}
