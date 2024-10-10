<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Registreer hier je seeders
        $this->call([
            AtletenSeeder::class,      // Seeder voor atleten
            EventsTableSeeder::class,  // Seeder voor evenementen
        ]);
    }
}
