<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenant', function (Blueprint $table) {
            $table->increments('id');
            $table->string("Nom")->nullable();
            $table->string("Prenom")->nullable();
            $table->string("Email")->nullable();
            $table->string("Adress")->nullable();
            $table->string("CIN")->nullable();
            $table->string("Date_naissance")->nullable();
            $table->string("Image")->nullable();
            // Sprint 1.
            $table->string("Etudiant_actif")->nullable();
            $table->string("Date_inscription")->nullable();
            $table->string("Sexe")->nullable();
            $table->string("Diplome")->nullable();
            $table->string("Lieu_naissance")->nullable();
            $table->integer("Numero_telephone")->nullable(); 
            $table->string("Nom_arabe")->nullable();
            $table->string("Prenom_arabe")->nullable();
            $table->string("Niveau_Scolaire")->nullable();
        });

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenant');
    }
};
