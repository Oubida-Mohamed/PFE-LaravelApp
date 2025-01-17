<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategorie extends Model
{
    use HasFactory;
    protected $fillable = [];
    public function header(){
        return $this->belongsTo(Header::class,'id');
    }
}
