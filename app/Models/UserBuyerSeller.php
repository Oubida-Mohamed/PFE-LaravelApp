<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserBuyerSeller extends Model
{
    use HasFactory;
    protected $guarded=["email","password"];
    public function services(){
        return $this->hasMany(Service::class);
    }
}
