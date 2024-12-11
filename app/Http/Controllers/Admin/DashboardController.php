<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dpo;
use Maatwebsite\Excel\Facades\Excel; // Impor ini
use App\Exports\DpoExport; // Impor ini

class DashboardController extends Controller
{
    public function index()
    {
        $totalDPO = Dpo::where('status', 'DPO')->count();
        $totalNonDPO = Dpo::where('status', 'Bukan DPO')->count();

        return view('admin.dashboard', compact('totalDPO', 'totalNonDPO'));
    }

    public function export()
    {
        return Excel::download(new DpoExport, 'dpo_data.xlsx');
    }
}