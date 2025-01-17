<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function user(){
        return $this->belongsTo(User::class,'id');
    }
    public function galleries(){
        return $this->hasMany(Gallery::class,"services_id");
    }
}
