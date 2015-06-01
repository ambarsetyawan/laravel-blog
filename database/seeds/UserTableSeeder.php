<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name'      => 'admin',
            'email'     => 'pearson@inbox.ru',
            'password'  => bcrypt('password'),
        ]);
    }

}