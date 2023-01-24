<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'title' => 'group 1', "created_at" => now(), "updated_at" => now(),],
            ['id' => 2, 'title' => 'group 2', "created_at" => now(), "updated_at" => now(),],
            ['id' => 3, 'title' => 'group 3', "created_at" => now(), "updated_at" => now(),],
            ['id' => 4, 'title' => 'group 4', "created_at" => now(), "updated_at" => now(),]
        ];
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('groups')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('groups')->insert($data);
    }
}
