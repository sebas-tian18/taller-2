<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\persona;
use FFI;

class personaController extends Controller
{
    public function index(){
        
        $datos = DB::table('persona')->get();
        return view('vista')->with('datos',$datos);          
    }

    public function prue(){
        $dosTablas = DB:: table('persona')
        ->join('cargo', 'cargo.id_cargo', '=', 'persona.id_persona')
        ->select('persona.nombre', 'cargo.cargo_laboral')
        ->get();
        dd($dosTablas);
        #$prueba = DB::table('persona')->where('nombre', 'Luisa')->value('nombre');
        #$prueba2 = DB::table('cargo')->where('id_cargo', 2)->first();
        #dd($prueba);
        #dd($prueba2);
        #return view('prue')->with('prueba',$prueba);    
    }

    public function filtro()
    {
        return view('prueba');
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