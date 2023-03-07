<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Groupes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Assign = [
            ['Groupe_id' => '1', 'Apprenant_id' => "1"],
            ['Groupe_id' => '1', 'Apprenant_id' => "2"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "3"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "4"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "5"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "6"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "7"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "8"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "9"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "10"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "11"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "12"], 
            ['Groupe_id' => '1', 'Apprenant_id' => "13"],   
            // 
            ['Groupe_id' => '2', 'Apprenant_id' => "14"], 
            ['Groupe_id' => '2', 'Apprenant_id' => "15"], 
            ['Groupe_id' => '2', 'Apprenant_id' => "16"], 
            ['Groupe_id' => '2', 'Apprenant_id' => "17"], 
            ['Groupe_id' => '2', 'Apprenant_id' => "18"], 
            ['Groupe_id' => '2', 'Apprenant_id' => "19"], 
            ['Groupe_id' => '2', 'Apprenant_id' => "20"], 

        ];

        DB::table('groupes_apprenant')->insert($Assign);
    }
}
