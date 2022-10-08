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
        // $var = $request->Check;// pasar a arreglo de string                 
        // $tamaño = sizeof($var);
        // $arr = [];
        // $con = "TABLE_NAME = ";
        //  //recorrer el Check para ver los datos almacenados e ir creando la consulta correspondiente
        // for ($i = 0;$i<$tamaño;$i++){
        //     $chk = DB::table('INFORMATION_SCHEMA.COLUMNS')
        //     ->when($i,function($query,$i){
        //         $query->Select($i)//cambiar funcion
        //     ->get();
        //     $arreglo = Arr::add($arr,$i,$chk);
        
        //     }
        // return view("p2")->with('chk',$arr);
    
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
    public function checkpersona(Request $request)
    {
        $id_persona = $request->id_persona;
        $nombre = $request->nombre;
        $apellido = $request->apellido;
        $fecha_nac = $request->fecha_nac;
        $cedula_ident = $request->cedula_ident;
        $direccion = $request->direccion;
        $FK_id_sexo = $request->FK_id_sexo;

        $datosP = DB::table('persona')
            ->when($id_persona,function($query,$id_persona){
                $query->select($id_persona);
            })
            ->when($nombre,function($query,$nombre){
                $query->addSelect($nombre);
            })
            ->when($apellido,function($query,$apellido){
                $query->addSelect($apellido);
            })
            ->when($fecha_nac,function($query,$fecha_nac){
                $query->addSelect($fecha_nac);
            })
            ->when($cedula_ident,function($query,$cedula_ident){
                $query->addSelect($cedula_ident);
            })
            ->when($direccion,function($query,$direccion){
                $query->addSelect($direccion);
            })
            ->when($FK_id_sexo,function($query,$FK_id_sexo){
                $query->addSelect($FK_id_sexo);
            })
            ->get();
            dd($datosP);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
//sebastian Muñoz
        public function tab_per(){

            $tab_per = DB::table('INFORMATION_SCHEMA.COLUMNS')
            ->select('*')
            ->where('COLUMN_NAME')
            ->get();
            return view("per_c")->with('co',$tab_per);
    }   

    public function seleccion2(Request $request){
        $var = $request->Check;// pasar a arreglo de string 
        $tamaño = sizeof($var);
        $arr = [];
        $con = "TABLE_NAME = ";
        $t = "'";
         //recorrer el Check para ver los datos almacenados e ir creando la consulta correspondiente
         for ($i = 0;$i<$tamaño;$i++){
            $texto = $con.$var[$i];
            $chk = DB::table('INFORMATION_SCHEMA.COLUMNS')
            ->where($texto)
            ->get();
            $arreglo = Arr::add($arr,$i,$chk);
        }
        return view("p2")->with('chk',$arr);
    }

    // public function persoColum(Request $request){
    //     $var = $request->Check;
    //     $tamaño = sizeof($var);
    //     $arr = [];
    //     //recorrer el Check para ver los datos almacenados e ir creando la consulta correspondiente
    //     for ($i = 0;$i<$tamaño;$i++){
    //         $chk = DB::table('INFORMATION_SCHEMA.COLUMNS')
    //         ->select($var($i))//selecciona las columnas
    //         ->get();
    //         $arreglo = Arr::add($arr,$i,$chk);
    //     }
    //     return view('p2')->with('chk',$arr);
    // }

}