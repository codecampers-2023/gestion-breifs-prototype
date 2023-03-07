<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Studetns_Group extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $students = [
            ['nom' => 'Tebbaa', 'Prenom' => "Adnane", 'Email'=>"adnane@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB001", 'Date_naissance'=>"10/03/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"التباع","Prenom_arabe"=>"عدنان", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'ElMliki', 'Prenom' => "Hicham",'Email'=>"Hicham@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB002", 'Date_naissance'=>"10/01/2002", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"المليكي","Prenom_arabe"=>"هشام", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Merradou', 'Prenom' => "Abderahmane",'Email'=>"Abderhamane@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB003", 'Date_naissance'=>"10/02/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"مرادو ","Prenom_arabe"=>"عبد الرحمن", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Yahya', 'Prenom' => "Mohammed",'Email'=>"Yahya@gmail.com", 'Adress'=>"Tangier", 'CIN'=>"KB004", 'Date_naissance'=>"10/04/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"محمد","Prenom_arabe"=>"يحيى", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Barina', 'Prenom' => "Bilal",'Email'=>"Bilal@gmail.com", 'Adress'=>"Tangier", 'CIN'=>"KB005", 'Date_naissance'=>"10/05/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"بارينا","Prenom_arabe"=>"بلال", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Lharrak', 'Prenom' => "Boutaina",'Email'=>"Boutaina@gmail.com", 'Adress'=>"Tangier", 'CIN'=>"KB001", 'Date_naissance'=>"10/06/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'femelle', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"لحراق","Prenom_arabe"=>"بتينة", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Stitou', 'Prenom' => "Nada",'Email'=>"Nada@gmail.com", 'Adress'=>"Tangier", 'CIN'=>"KB006", 'Date_naissance'=>"10/07/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'femelle', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"ستيتو","Prenom_arabe"=>"ندى", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Imane', 'Prenom' => "Najim",'Email'=>"Imane@gmail.com", 'Adress'=>"Tangier", 'CIN'=>"KB007", 'Date_naissance'=>"10/08/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'femelle', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"ناجم","Prenom_arabe"=>"إيمان", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Imane', 'Prenom' => "Ajroudi",'Email'=>"Imane@gmail.com",  'Adress'=>"Tangier", 'CIN'=>"KB008", 'Date_naissance'=>"10/09/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'femelle', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"أجرودي","Prenom_arabe"=>"إيمان", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Tsouli', 'Prenom' => "Ihassane",'Email'=>"Ihssane@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB009", 'Date_naissance'=>"10/10/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'femelle', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"تسولي","Prenom_arabe"=>"إحسان", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Ahouzi', 'Prenom' => "Hasane",'Email'=>"Hasnae@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB0010", 'Date_naissance'=>"10/12/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'femlle', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"أحوزي","Prenom_arabe"=>"حسنى", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Elkaissi', 'Prenom' => "Zayd",'Email'=>"Zayd@gmail.com", 'Adress'=>"Tangier", 'CIN'=>"KB0011", 'Date_naissance'=>"10/01/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"القيسي","Prenom_arabe"=>"زيد", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Ben-ayad', 'Prenom' => "Aicha",'Email'=>"Aicha@gmail.com", 'Adress'=>"Tangier", 'CIN'=>"KB0012", 'Date_naissance'=>"10/àé/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'femelle', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"بن عياد","Prenom_arabe"=>"عائشة", "Niveau_scolaire"=>'Bac'],
            //
            ['nom' => 'Madani', 'Prenom' => "Madani",'Email'=>"madani@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB0001", 'Date_naissance'=>"10/03/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"","Prenom_arabe"=>"", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Mustrafa', 'Prenom' => "Madani",'Email'=>"mustafa@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB0002", 'Date_naissance'=>"10/03/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"","Prenom_arabe"=>"", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Mohamed', 'Prenom' => "Madani",'Email'=>"mohamed@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB0003", 'Date_naissance'=>"10/03/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"","Prenom_arabe"=>"", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Majdi', 'Prenom' => "Madani",'Email'=>"majdi@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB0004", 'Date_naissance'=>"10/03/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"","Prenom_arabe"=>"", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Maher', 'Prenom' => "Madani",'Email'=>"maher@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB0005", 'Date_naissance'=>"10/03/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"","Prenom_arabe"=>"", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Mukhtar', 'Prenom' => "Madani",'Email'=>"mukhtar@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB0006", 'Date_naissance'=>"10/03/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"","Prenom_arabe"=>"", "Niveau_scolaire"=>'Bac'],
            ['nom' => 'Mansour', 'Prenom' => "Madani",'Email'=>"mansour@gmail.com",'Adress'=>"Tangier", 'CIN'=>"KB0007", 'Date_naissance'=>"10/03/2003", 'Image'=>'null', 'Etudiant_actif'=>"True", 'Date_inscription'=>"21/10/2021", "Sexe"=>'male', "Diplome"=>'Oui', "Lieu_naissance"=>'Tanger', "Numero_telephone"=>'0666123', "Nom_arabe"=>"","Prenom_arabe"=>"", "Niveau_scolaire"=>'Bac'],

        ];

        $groups = [
            ['Nom_groupe' => 'CodeCampers'],
            ['Nom_groupe' => 'Debuggers'],
        ];

        DB::table('apprenant')->insert($students);
        DB::table('groupes')->insert($groups);

    }
}
