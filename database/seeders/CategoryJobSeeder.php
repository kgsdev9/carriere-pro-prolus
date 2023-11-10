<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name'=> 'Informatique, Systeme d\'information',] ,
            ['name'=> 'Alimentation'] ,
            ['name'=> 'Électroménager'] ,
            ['name'=> 'Beauté et Parfumerie'] ,
            ['name'=> 'Meuble'] ,
            ['name'=> 'Automobile'] ,
            ['name'=> 'Pièces Automobiles'] ,
            ['name'=> 'Projet Informatique divers'] ,
            ['name'=> 'Bierre'],
            ['name'=> 'Telivision'],
            ['name'=> 'Boisson africaine'],
            ['name'=> 'Telephone & tablette'],
            ['name'=> 'Ordinateur Portable'],
            ['name'=> 'Equipements'],
            ['name'=> 'Mode Femme'],
            ['name'=> 'Electroniques'],
            ['name'=> 'Vetements Africains'],
            ['name'=> 'Decodeur'],
            ['name'=> 'Mode Africaine'],
            ['name'=> 'Maquillage'],
            ['name'=> 'Sac'],
            ['name'=> 'Camera Digitale'],
            ['name'=> 'Climatiseur'],
            ['name'=> 'Maison et Meuble'],
            ['name'=> 'Imprimantes'],
            ['name'=> 'Mode Homme'],
            ['name'=> 'Agriculture'],

        ]);
    }
}
