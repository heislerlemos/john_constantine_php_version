<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Centro_de_formacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('centros_de_formacao')->insert([
            'imglink' => '',
            'nome' => '',
            'localização' => '',
            'vagas' => 45 ,
        ], 
        [
        'imglink' => '',
        'nome' => '',
        'localização' => '',
        'vagas' => 38,        
        ],

        );
    }
}
