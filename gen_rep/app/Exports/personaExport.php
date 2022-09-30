<?php

namespace App\Exports;

use App\Models\persona;
use Maatwebsite\Excel\Concerns\FromCollection;

class personaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return persona::select("nombre")-> get();
    }
}
