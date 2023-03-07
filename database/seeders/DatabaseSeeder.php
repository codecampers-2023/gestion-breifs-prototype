<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Database\Seeders\Groupes;
use Database\Seeders\Studetns_Group;


class DatabaseSeeder extends Seeder
{
  public function run (){

 $this->call(Studetns_Group::class);
//  $this->call(Groupes::class);


  }
}
