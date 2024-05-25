<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Auteur extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'auteurs';
    protected $fillable = ['nom','dateNaissance'];
    public function livres(){
        return $this->hasMany(Livre::class);
    }
}
