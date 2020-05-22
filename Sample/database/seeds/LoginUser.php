<?php

use Illuminate\Database\Seeder;

class LoginUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Login_Users')->insert([
            'login_user' => 'narukawa.t',
            'password' => 'test',
            'user_name' => '生川 智規' 
        ]);
    }
}
