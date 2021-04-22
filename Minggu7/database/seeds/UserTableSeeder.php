<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Ilham Taufiqul Khaliq',
            'email' => 'ilhamtaufiqul75@gmail.com',
            'password' => bcrypt(12345678),
        ]);
    }
}
