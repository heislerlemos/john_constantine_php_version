<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('cursos')->insert([
    [
    'centro_de_formacao_id' => 1,
    'semestre' => 'programacao_cadeiras.png',
    'cadeiras'=> 'Programação',
    'data' => '2024-11-19',
    'documentos' => 'inscricao.png',
    'tempo_de_duracao' => 5 ,
    'precario' => 50,


    ],

    [
    'centro_de_formacao_id' => 2,
    'cadeiras' => 'Marketing',
    'semestre' => 'direito_cadeiras.png',
    'data' => '2024-10-2',
    'documentos' => 'inscricao.png',
    'tempo_de_duracao' => 4,
    'precario' => 35,
        
    ],

    

    ]);
        

        
        //
    }
}
