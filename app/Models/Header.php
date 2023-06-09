<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $fillable = [];
    public function subcategories(){
        return $this->hasMany(SubCategorie::class,'headers_id');
    }
    public function caregorie(){
        return $this->belongsTo(Categorie::class,'id');
    }
}
