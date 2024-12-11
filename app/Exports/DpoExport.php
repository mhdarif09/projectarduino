<?php

namespace App\Exports;

use App\Models\Dpo;
use Maatwebsite\Excel\Concerns\FromCollection;

class DpoExport implements FromCollection
{
    public function collection()
    {
        return Dpo::all(); // Anda bisa menyesuaikan dengan data yang ingin diexport
    }
}
