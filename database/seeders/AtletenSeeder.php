<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AtletenSeeder extends Seeder
{
    public function run()
    {
        // Voeg voorbeeld-atleten toe
        DB::table('athletes')->insert([
            [
                'name' => 'John Doe',
                'date_of_birth' => Carbon::parse('2000-01-01'), // Geboortedatum
                'gender' => 'man',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'date_of_birth' => Carbon::parse('1995-05-15'), // Geboortedatum
                'gender' => 'man',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mike Johnson',
                'date_of_birth' => Carbon::parse('1998-09-20'), // Geboortedatum
                'gender' => 'man',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emily Davis',
                'date_of_birth' => Carbon::parse('1997-12-12'), // Geboortedatum
                'gender' => 'man',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Chris Brown',
                'date_of_birth' => Carbon::parse('2001-03-25'), // Geboortedatum
                'gender' => 'man',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
