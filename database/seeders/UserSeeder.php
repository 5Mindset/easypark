<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::firstOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('password'),
            'role_id' => Role::where('name', 'admin')->first()->id, 
        ]);

        User::firstOrCreate([
            'email' => 'petugas@example.com',
        ], [
            'name' => 'Petugas User',
            'password' => bcrypt('password'),
            'role_id' => Role::where('name', 'petugas')->first()->id, 
        ]);

        User::firstOrCreate([
            'email' => 'mahasiswa@example.com',
        ], [
            'name' => 'Mahasiswa User',
            'password' => bcrypt('password'),
            'role_id' => Role::where('name', 'mahasiswa')->first()->id, 
        ]);

        // User::factory()->count(10)->create()->each(function ($user) {
        //     $user->role_id = Role::inRandomOrder()->first()->id; // Menetapkan role_id acak untuk setiap penggun
        //     $user->save();
        // });
    }
}
