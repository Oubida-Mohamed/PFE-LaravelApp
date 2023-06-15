<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Userbuyerseller(){
        return $this->beLongsTo(UserBuyerSeller::class,"user_buyer_sellers_id");
    }
}
