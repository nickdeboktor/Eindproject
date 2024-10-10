<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    // Geef aan welke tabel dit model gebruikt
    protected $table = 'Athletes'; // Dit is de juiste tabelnaam

    // Geef aan welke velden massaal toewijsbaar zijn
    protected $fillable = ['name', 'date_of_birth', 'gender'];
}