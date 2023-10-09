<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        // 'lineage',
        // 'national_number',
        'prenom',
        'téléphone',
        'cin',
        'email',
        'appointment_day',
        'appointment_hour',

        
    ];

 
}
