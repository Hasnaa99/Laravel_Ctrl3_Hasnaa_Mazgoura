<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $fillable = ['nom','age','profession'];
    public function stagiaires()
    {
        return $this->belongsToMany(Stagiaire::class);
    }
}
