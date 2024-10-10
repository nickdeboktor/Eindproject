<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        // Voeg een paar voorbeeld-evenementen toe
        DB::table('events')->insert([
            [
                'name' => 'speerwerpen',
                'date' => Carbon::now()->addWeeks(2), // Datum over 2 weken
                'type' => 'werpen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sprint 100m',
                'date' => Carbon::now()->addWeeks(3), // Datum over 3 weken
                'type' => 'race',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hoogspringen',
                'date' => Carbon::now()->addWeeks(4), // Datum over 4 weken
                'type' => 'Springen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
