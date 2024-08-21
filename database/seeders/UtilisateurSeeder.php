<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Utilisateur;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert([
            'nom' => 'Doe',
            'prenom' => 'John',
            'username' => 'johndoe',
            'password' => Hash::make('admin1'),
            'role' => 'admin',
        ]);

        DB::table('utilisateurs')->insert([
            'nom' => 'Tazi',
            'prenom' => 'Ali',
            'username' => 'taziali',
            'password' => Hash::make('technicien1'),
            'role' => 'technicien',
        ]);

        DB::table('utilisateurs')->insert([
            'nom' => 'Allaoui',
            'prenom' => 'Ahmed',
            'username' => 'allaouiahmed',
            'password' => Hash::make('demandeur1'),
            'role' => 'demandeur',
        ]);

        DB::table('utilisateurs')->insert([
            'nom' => 'Allami',
            'prenom' => 'Khawla',
            'username' => 'allamikhawla',
            'password' => Hash::make('assistante1'),
            'role' => 'assistante technique',
        ]);
    }
}
