<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = config('users');

        // foreach ($users as $_user) {
        //     User::create($user);
        //     $user = new User();
        //     $user->name = $_user['name'];
        //     $user->surname = $_user['surname'];
        //     $user->email = $_user['email'];
        //     $user->password = Hash::make($_user['password']);
            
        //     $user->save();
        // }

        foreach ($users as $user) {
            
            $user['password']=Hash::make($user['password']);
            User::create($user);
            
        }
    }
}
