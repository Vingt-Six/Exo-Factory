<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'name' => 'Coding School 21'
            ],
            [
                'name' => 'Coding School 22'
            ],
            [
                'name' => 'Coding School 23'
            ],
            [
                'name' => 'Coding School 24'
            ],
            [
                'name' => 'Coding School 25'
            ],
            [
                'name' => 'Marketing 2'
            ],
            [
                'name' => 'Marketing 3'
            ],
            [
                'name' => 'Webmaster 2'
            ],
            [
                'name' => 'Webmaster 3'
            ],
            [
                'name' => 'Webmaster 4'
            ],
        ]);
    }
}
