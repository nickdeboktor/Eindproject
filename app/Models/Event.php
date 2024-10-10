<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Geef de fillable velden op
    protected $fillable = [
        'name',
        'date',
        'type',
    ];
}
