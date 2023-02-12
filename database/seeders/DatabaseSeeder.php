<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\categorie;
use App\Models\Jeu;
use App\Models\Tags;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        categorie::factory(10)->create();
        Tags::factory(50)->create();
        Jeu::factory(10)->create();
        $jeux = Jeu::all();
        foreach($jeux as $jeu){
            $jeu->tags()->attach(1); //attach pour ajouter, detach pour enlever
        }
        // Jeu::factory()->create(['titre'=>'Mario']);
    }
}
