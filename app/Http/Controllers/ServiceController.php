<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index(){
        $V = Service::with('Userbuyerseller')->get();
    return response()->json($V);
}
    }
