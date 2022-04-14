<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
        $insert = [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=> bcrypt('123456'),
       ];
       User::create($insert);

       $insert = [
            'name'=>'hrd',
            'email'=>'hrd@gmail.com',
            'role'=>'hrd',
            'password'=> bcrypt('123456'),
       ];
       User::create($insert);

       $insert = [
            'name'=>'user',
            'email'=>'user@gmail.com',
            'role'=>'user',
            'password'=> bcrypt('123456'),
       ];
       User::create($insert);

       $insert = [
            'name'=>'yahdi',
            'email'=>'yahdialmukaram03@gmail.com',
            'role'=>'user',
            'password'=> bcrypt('yahdi'),
       ];
       User::create($insert);


    }
}
