<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Test',
            'role' => User::ADMIN,
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);
        
        User::create([
            'name' => 'Student Test',
            'role' => User::STUDENT,
            'email' => 'student@student.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'Teacher Test',
            'email' => 'teacher@teacher.com',
            'role' => User::TEACHER,
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);
    }
}
