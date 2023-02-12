<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $table = "categorie";
    protected $primaryKey ="id";
    protected $fillable = array('libelle');
    public $timestamps = false;

    public function jeux()
    {
        return $this->hasMany(Jeu::class);
    }
}