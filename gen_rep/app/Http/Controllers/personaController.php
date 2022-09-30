<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\persona;
use FFI;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\personaExport;

class personaController extends Controller
{
    public function inde(){

        $datos = DB::table('persona')->get();
        return view('vista')->with('datos',$datos);
    }
    public function index(Request $request){
        $persona1 = $request->persona1;
        $persona2 = $request->persona2;

        $datos = DB::table('persona')
            ->when($persona1,function($query,$persona1){
                $query->select($persona1);
            })
            ->when($persona2,function($query,$persona2){
                $query->addSelect($persona2);
            })
            ->get();
            dd($datos);
            //return view('mostrar')->with('datos',$datos);
    }

    public function prue(){
        $dosTablas = DB:: table('persona')
        ->join('cargo', 'cargo.id_cargo', '=', 'persona.id_persona')
        ->select('persona.nombre', 'cargo.cargo_laboral')
        ->get();
        dd($dosTablas);
    }

    public function filtro()
    {
        return view('prueba');
    }

    public function exportExcel()
    {
     return Excel::download(new personaExport, 'persona-list.xlsx'); /*comando en consola para usar este metodo es
                                                                       php artisan make:export personaExport --model=persona */ 
                                                                       /*
                                                                        es una libreria para poder usar excel
                                                                        composer require maatwebsite/excel
                                                                        */
    }

}





/*$dato = DB::table('persona')->where('nombre', 'Pedro')->first();
        dd($dato);*/

/*
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
            //return view('mostrar')->with('datos',$datos);
    }
} */
