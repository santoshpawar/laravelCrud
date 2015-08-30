<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name'=>'santosh pawr',
            'email'=>'santoshvijafdypsaawar@gmail.com',
            'password'=>Hash::make('pass'),


        ]);
        User::create([
            'name'=>'santosh pawr',
            'email'=>'santoshvijayfdfpawar@gmail.com',
            'password'=>Hash::make('pass'),


        ]);
    }
}
