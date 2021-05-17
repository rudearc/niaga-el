<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data ini hanya contoh anda bisa mengisinya sesuai keinginan anda
        $admin['name'] = 'rudevenger';
        $admin['email'] = 'example@gmail.com';
        $admin['password'] = Hash::make('*********');
        $admin['phone'] = 'xxxxxxxxxx';
        $admin['alamat'] = 'earth';
        $admin['role'] = 'admin';
        User::create($admin);
    }
}
