<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    use HasFactory;
    protected $table="jeux";
    protected $primaryKey="id";
    public $timestamps= false;
    protected $fillable = ['titre'];
    
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tags::class,'pivot_tags');
    }
}
