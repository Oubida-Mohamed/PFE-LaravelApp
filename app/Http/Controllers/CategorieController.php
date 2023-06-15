<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index(){
        $V = Categorie::with('headers','headers.subcategories')->get();
        return response()->json($V);
    }
}