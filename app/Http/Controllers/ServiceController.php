<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use  App\Models\User;

class ServiceController extends Controller
{
<<<<<<< HEAD
    public function index(){
        $S = User::with('services')->get();
        return $S;
    }
}
=======
  
    }
>>>>>>> d7c87f47f7e63b702576d29d88ab8745134cf235
