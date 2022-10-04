<?php

namespace App\Exports;

use App\Models\persona;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;

class personaExport implements FromCollection, FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return persona::select("nombre")-> get();
    }
    public function view(){
        return view('export.excel');
    }
}
