<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\persona;
use FFI;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

use App\Exports\personaExport;
use Illuminate\Support\Arr;
use PHPUnit\Framework\Constraint\Count;

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
/////////////////////////////////////////////////////////////////////////////////////
    //Cargo
    public function alga(){

        $datos = DB::table('cargo')->get();
        return view('cargo')->with('datos',$datos);
    }
    public function A(Request $request){
        $cargo=$request->id_cargo;
        $descripcion=$request->cargo_laboral;
        $salario=$request->descripcion_cargo;
        $id=$request->salario_mensual;

        $datos = DB::table('cargo')
        ->when($cargo,function($query,$cargo){
            $query->select($cargo);
        })
        ->when($descripcion,function($query,$descripcion){
            $query->addSelect($descripcion);
        })
        ->when($salario,function($query,$salario){
            $query->addSelect($salario);
        })
        ->when($id,function($query,$id){
            $query->addSelect($id);
        })
        ->get();
        dd($datos);
    }


////////////////////////////////////////////////////////////////////////////////
    public function tablas(){

        $tabla = DB::table('INFORMATION_SCHEMA.TABLES')
        ->select('TABLE_NAME')
        ->get();
        return view("test")->with('tabla',$tabla);
    } 

    public function seleccion(Request $request){
        $var = $request->Check;// pasar a arreglo de string 
        //$tamaño = Count($var);
        $arr = [];
        $n = 0;
        $con = "TABLE_NAME"; 
//recorrer el Check para ver los datos almacenados e ir creando la consulta correspondiente
        for ($i = 0;$i<count($var);$i++){
            $users = DB::table('INFORMATION_SCHEMA.COLUMNS')
                ->select('COLUMN_NAME')
                ->where($con,$var[$i])
                ->get();
                
                for ($a=0;$a< count($users);$a++){
                    $arr = Arr::add($arr,$n++, [$var[$i],$users[$a]->COLUMN_NAME]);
                }
            }
        //dd($arr);
        return view("p2")->with(compact('arr','var'));
    }  

/////////////////////////////////////////////////////////////////////////////////////////
//funcion de dos tablas
    public function prue(){
        $dosTablas = DB:: table('persona')
        ->join('cargo', 'cargo.id_cargo', '=', 'persona.id_persona')
        ->select('persona.nombre', 'cargo.cargo_laboral')
        ->get();
        dd($dosTablas);
    }

////////////////////////////////////////////////////////////////////////////////////////////

    public function exportExcel()
    {
    return Excel::download(new personaExport, 'persona-list.xlsx');
    /*comando en consola para usar este metodo es: php artisan make:export personaExport --model=persona
    es una libreria para poder usar excel: composer require maatwebsite/excel*/
    }
    public function exportPDF(){

        $pdf = \PDF::loadView('exports.expo_p');
        return $pdf->stream('expo_p.pdf');//download
    }

    public function exportjson()
    {
        $categorias = persona::all();
        $data = ['personas'=>$categorias];
        return response()->json($data,200,[]);
    }
/////////////////////////////////////////////////////////////////////////////////////////
// check
 
/////////////////////////////////////////////////////////////////////////////////////////////////
//sebastian Muñoz
    //     public function tab_per(){

    //         $tab_per = DB::table('INFORMATION_SCHEMA.COLUMNS')
    //         ->select('*')
    //         ->where('COLUMN_NAME')
    //         ->get();
    //         return view("per_c")->with('co',$tab_per);
    // }   

    // public function seleccion2(Request $request){
    //     $var = $request->Check;// pasar a arreglo de string 
    //     $tamaño = sizeof($var);
    //     $arr = [];
    //     $con = "TABLE_NAME = ";
    //     $t = "'";
    //      //recorrer el Check para ver los datos almacenados e ir creando la consulta correspondiente
    //      for ($i = 0;$i<$tamaño;$i++){
    //         $texto = $con.$var[$i];
    //         $chk = DB::table('INFORMATION_SCHEMA.COLUMNS')
    //         ->where($texto)
    //         ->get();
    //         $arreglo = Arr::add($arr,$i,$chk);
    //     }
    //     return view("p2")->with('chk',$arr);
    // }


}