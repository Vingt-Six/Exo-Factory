<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                'name' => 'Coding School',
                'description' => 'formation basé sur le code'
            ],
            [
                'name' => 'Webmaster',
                'description' => 'formation basé sur le web'
            ],
            [
                'name' => 'Marketing',
                'description' => 'formation basé sur le marketing'
            ],
            [
                'name' => 'Mécanique',
                'description' => 'formation basé sur la mécanique'
            ],
            [
                'name' => 'Infographiste',
                'description' => 'formation basé sur le design'
            ],
            [
                'name' => 'Menuiserie',
                'description' => 'formation basé sur la menuiserie'
            ],
        ]);
    }
}
