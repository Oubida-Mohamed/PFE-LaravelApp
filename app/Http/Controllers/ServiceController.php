<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use  App\Models\User;

class ServiceController extends Controller
{

    public function index(){
        $S = User::with('services','services')->get();
        return $S;
    }
}

  

