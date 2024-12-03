<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dpo;

class DpoController extends Controller
{
    public function __construct()
    {
        // Middleware untuk memastikan hanya admin yang bisa mengakses
        $this->middleware('role:admin'); // Hanya bisa diakses oleh role admin
    }

    public function checkDpo(Request $request)
    {
        // Validasi NIK yang dikirim untuk pemeriksaan
        $request->validate([
            'nik' => 'required|string|size:16', // Validasi NIK
        ]);

        // Mencari DPO berdasarkan NIK
        $dpo = Dpo::where('nik', $request->nik)->first();

        if ($dpo) {
            return response()->json([
                'message' => 'DPO status found',
                'dpo' => $dpo,
                'status' => $dpo->status
            ]);
        } else {
            return response()->json(['message' => 'No DPO found']);
        }
    }
}
