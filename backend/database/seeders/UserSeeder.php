<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'username' => 'Tom', 'firstname' => 'Tom', 'lastname' => '', 'avatar' => 'uploads/avatar/tom.jpg', 'email' => 'tom@gmail.com', "created_at" => now(), "updated_at" => now(),],
            ['id' => 2, 'username' => 'Kaan', 'firstname' => 'Kaan', 'lastname' => '', 'avatar' => 'uploads/avatar/kaan.jpg', 'email' => 'kaan@gmail.com', "created_at" => now(), "updated_at" => now(),],
            ['id' => 3, 'username' => 'Joe', 'firstname' => 'Joe', 'lastname' => '', 'avatar' => 'uploads/avatar/joe.jpg', 'email' => 'joe@gmail.com', "created_at" => now(), "updated_at" => now(),],
            ['id' => 4, 'username' => 'Martin', 'firstname' => 'Martin', 'lastname' => '', 'avatar' => 'uploads/avatar/martin.jpg', 'email' => 'martin@gmail.com', "created_at" => now(), "updated_at" => now(),],
        ];
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('users')->insert($data);
    }
}
