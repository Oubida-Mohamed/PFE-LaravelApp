<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [];
    
    public function headers(){
        return $this->hasMany(Header::class,'categories_id');
    }
}
