<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\persona;
use Illuminate\http\Request;

class personaController extends Controller
{
    public function index(Request $request){
        $per = $request->persona1;
        $per2 = $request->persona2;
        $caja = $request->caja;

        print_r($caja);
        var_dump((bool)$per);
        var_dump((bool)$per2);
        /*$datos = DB::table('persona')
            ->when($persona1,function($query,$persona1){
                $query->select('persona1',$persona1);
            })
            ->when($persona2,function($query,$persona2){
                $query->addSelect('persona2',$persona2);
            })
            ->get();
            dd($datos);
            //return view('mostrar')->with('datos',$datos);*/
    }
}