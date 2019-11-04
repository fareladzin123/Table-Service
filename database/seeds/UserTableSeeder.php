<?php

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
        DB::table('users')->insert([
            [
                'name' => 'Fareladzin Wibi',
                'username' => 'Administrator',
                'password' => bcrypt('administrator'),
                'role' => '1'
            ],
            [
                'name' => 'Fareladzin Wibi',
                'username' => 'Waiter',
                'password' => bcrypt('waiter'),
                'role' => '2'
            ],
            [
                'name' => 'Fareladzin Wibi',
                'username' => 'Kasir',
                'password' => bcrypt('kasir'),
                'role' => '3'
            ],
            [
                'name' => 'Fareladzin Wibi',
                'username' => 'Owner',
                'password' => bcrypt('owner'),
                'role' => '4'
            ],
        ]);
    }
}
