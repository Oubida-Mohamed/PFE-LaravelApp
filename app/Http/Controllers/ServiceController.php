<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;

class ServiceController extends Controller
{
    public function index(){
        $S = User::with('services')->get();
        return $S;
    }
}
