<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\persona;
class personaController extends Controller
{
    public function index(){
        $datos = DB::table('persona')->get();
        return view('vista')->with('datos',$datos);
        
    }
    public function filtro()
    {
        return view('prueba');
    }
}
