<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index(){
        $V = Categorie::with('headers','headers.subcategories')->get();
        // $V->load('headers.subcategories');

        return response()->json($V);
    }
}
// [
//     {id:1,
//     headers:[
//         {id:1,
//         subcategories:[{id:1}]}
//     ]}
// ]