<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dpo;
use Illuminate\Http\JsonResponse;

class DpoStatusController extends Controller
{
    public function __construct()
    {
        // Memastikan hanya admin yang bisa mengakses
        $this->middleware('role:admin');
    }

    // Render halaman untuk cek status DPO
    public function showCheckDpoPage()
    {
        return view('admin.check_dpo');
    }

    // API untuk cek status DPO
    public function checkDpo(Request $request): JsonResponse
    {
        // Validasi input NIK
        $request->validate([
            'nik' => 'required|string|size:16',
        ]);

        // Mencari DPO berdasarkan NIK
        $dpo = Dpo::where('nik', $request->nik)->first();

        if ($dpo) {
            // Jika ditemukan, kembalikan respons JSON dengan status DPO
            return response()->json([
                'message' => 'DPO status found',
                'data' => [
                    'nik' => $dpo->nik,
                    'name' => $dpo->name,
                    'status' => $dpo->status,
                    'created_at' => $dpo->created_at,
                    'updated_at' => $dpo->updated_at,
                ]
            ], 200);
        }

        // Jika tidak ditemukan
        return response()->json([
            'message' => 'No DPO found for the given NIK',
        ], 404);
    }
}