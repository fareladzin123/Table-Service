<?php

use Illuminate\Database\Seeder;

class MejaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mejas')->insert([
            [
                'no_meja' => '1',
                'status' => 1
            ],
            [
                'no_meja' => '2',
                'status' => 0
            ],
            [
                'no_meja' => '3',
                'status' => 0
            ],
            [
                'no_meja' => '4',
                'status' => 1
            ],
            [
                'no_meja' => '5',
                'status' => 0
            ],
            [
                'no_meja' => '6',
                'status' => 1
            ],
            [
                'no_meja' => '7',
                'status' => 0
            ],
            [
                'no_meja' => '8',
                'status' => 1
            ],
            [
                'no_meja' => '9',
                'status' => 1
            ],
            [
                'no_meja' => '10',
                'status' => 0
            ],
            [
                'no_meja' => '11',
                'status' => 0
            ],
        ]);
    }
}
