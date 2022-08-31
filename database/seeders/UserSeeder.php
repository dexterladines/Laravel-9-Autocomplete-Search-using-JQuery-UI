<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $users = [
            [
                "name" => "Jon Doe",
                "email" => "johndoe525@gmail.com",
                "password" => bcrypt('123456'),
                "birthdate" => "2000-05-25"
            ],
            [
                "name" => "Dee Koi",
                "email" => "drexladines@gmail.com",
                "password" => bcrypt('123456'),
                "birthdate" => "1998-08-31"
            ], 
            [
                "name" => "Ka Musta",
                "email" => "kamustakana@gmail.com",
                "password" => bcrypt('123456'),
                "birthdate" => "2005-09-01"
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
