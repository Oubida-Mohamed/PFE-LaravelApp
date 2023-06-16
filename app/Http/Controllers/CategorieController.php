<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        $V = Categorie::with('headers','headers.subcategories')->get();
        return response()->json($V);
    }
    public function index2(){
        $V = User::with('services')->get();
        return response()->json($V);
    }
}