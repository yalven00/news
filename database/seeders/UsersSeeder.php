<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run() { 
           User::truncate(); 
           $users = [ 
            [ 
              'name' => 'admin',
              'email' => 'admin@admin.com',
              'password' => 'qwerty12345',
              'is_manager' => '1',
            ],
            [
              'name' => 'user',
              'email' => 'user@user.com',
              'password' => 'qwerty',
              'is_manager' => null,
            ]
          ];

          foreach($users as $user)
          {
              User::create([
               'name' => $user['name'],
               'email' => $user['email'],
               'password' => Hash::make($user['password'])
             ]);
           }

    }
}
