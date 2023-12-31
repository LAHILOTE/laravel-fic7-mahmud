<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name'=>'Mahmud Domili',
            'email'=>'mudher@gmail.com',
            'email_verified_at'=> now(),
            'role' => 'admin',
            'password'=> Hash::make('123456'),
            'phone' => '085298167207',
            'bio' => 'Flutter Dev'
        ]);
        User::create([
            'name'=>'Super Admin',
            'email'=>'superadmin@gmail.com',
            'email_verified_at'=> now(),
            'role' => 'superadmin',
            'password'=> Hash::make('123456'),
            'phone' => '085298161201',
            'bio' => 'Laravel Dev'
        ]);
    }
}
