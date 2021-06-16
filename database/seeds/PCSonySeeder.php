<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PCSonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'name';

        DB::table('pc_sonies')->insert([
            [
                $name => 'PC1',
                'type' => 'pc'
            ],

            [
                $name => 'PC2',
                'type' => 'pc'
            ],

            [
                $name => 'PC3',
                'type' => 'pc'
            ],

            [
                $name => 'PC4',
                'type' => 'pc'
            ],

            [
                $name => 'PC5',
                'type' => 'pc'
            ],

            [
                $name => 'PC6',
                'type' => 'pc'
            ],

            [
                $name => 'PC7',
                'type' => 'pc'
            ],

            [
                $name => 'PC8',
                'type' => 'pc'
            ],

            [
                $name => 'PC9',
                'type' => 'pc'
            ],

            [
                $name => 'PC10',
                'type' => 'pc'
            ],

            [
                $name => 'PC11',
                'type' => 'pc'
            ],

            [
                $name => 'PC12',
                'type' => 'pc'
            ],

            [
                $name => 'PC13',
                'type' => 'pc'
            ],

            [
                $name => 'PC14',
                'type' => 'pc'
            ],

            [
                $name => 'PC15',
                'type' => 'pc'
            ],

            [
                $name => 'SONY1',
                'type' => 'sony'
            ],

            [
                $name => 'SONY2',
                'type' => 'sony'
            ],

            [
                $name => 'SONY3',
                'type' => 'sony'
            ]
        ]);
    }
}
