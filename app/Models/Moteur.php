<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moteur extends Model
{
    use HasFactory;
    protected $fillable = ['puissance' , 'model','voiture_id'];
    function voiture(){
        return $this->belongsTo(Voiture::class);
    }
}
