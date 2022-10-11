<?php

namespace App\Exports;

use App\Models\persona;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class personaExport implements FromCollection//, FromView
// seguir con este codigo con sebastian lopez
{
    use Exportable;

    public function collection()
    {
        return persona::select("nombre")-> get();
        //return Excel::download(new vista, 'vista.xlsx');
    }

    // public function view(): View
    // {
    //     return view('exports.Txls',['datos'=>datos::get()]);
    // }
}

