<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [];

    public function user(){
        return $this->belongsTo(User::class,'id');
=======
    protected $guarded=[];
    public function user(){
        return $this->beLongsTo(User::class,"id");
    }
    public function gallery(){
        return $this->beLongsTo(Gallery::class,"services_id");
>>>>>>> d7c87f47f7e63b702576d29d88ab8745134cf235
    }
}
