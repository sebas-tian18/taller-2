<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\persona;
class personaController extends Controller
{
    public function index(){
        $datos = persona::all();
        return view('vista', compact('datos'));
    }
}
