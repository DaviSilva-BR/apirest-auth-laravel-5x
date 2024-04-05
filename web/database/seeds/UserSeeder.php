<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
        'name' => 'admin',
        'email' => 'admin@teste.com',
        'password' => bcrypt('123')
        ]);
    }
}