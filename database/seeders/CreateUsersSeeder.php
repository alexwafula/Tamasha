<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [

         [
            'name'=>'Admin',
            'email'=>'kwobaalex9@gmail.com',
            'is_admin'=>'1',
            'password'=> \Hash::make('ruby123')
         ],


         [
            'name'=>'User',
            'email'=>'wafulaofficial@gmail.com',
            'is_admin'=>'0',
            'password'=> \Hash::make('ruby123')
         ],

        ];

        foreach($users as $key => $value){

          User::create($value);
        }
    }
}
