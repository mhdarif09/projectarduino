<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Dpo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DpoController extends Controller
{
    // Constructor untuk middleware yang hanya bisa diakses oleh super_admin
    public function __construct()
    {
        $this->middleware('role:super_admin'); // pastikan sudah ada middleware role
    }

    // Menampilkan daftar DPO
    public function index()
    {
        $dpos = Dpo::all(); // Mengambil semua data DPO
        return view('superadmin.dpo.index', compact('dpos'));
    }

    // Menampilkan form untuk menambahkan DPO baru
    public function create()
    {
        return view('superadmin.dpo.create');
    }

    // Menyimpan DPO baru
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:dpo,nik', // Perhatikan nama tabel yang benar 'dpo'
            'name' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        Dpo::create($request->all());

        return redirect()->route('superadmin.dpo.index')->with('success', 'DPO added successfully.');
    }

    public function edit($nik)
    {
        // Find the DPO by 'nik' instead of 'id'
        $dpo = Dpo::where('nik', $nik)->firstOrFail();
        return view('superadmin.dpo.edit', compact('dpo'));
    }
    
    public function update(Request $request, $nik)
    {
        $request->validate([
            'nik' => 'required|unique:dpo,nik,' . $nik,  // Use nik for validation
            'name' => 'required|string|max:255',
            'status' => 'required|string',
        ]);
    
        // Find the DPO by 'nik' and update it
        $dpo = Dpo::where('nik', $nik)->firstOrFail();
        $dpo->update($request->all());
    
        return redirect()->route('superadmin.dpo.index')->with('success', 'DPO updated successfully.');
    }
    
    public function destroy($nik)
    {
        // Find the DPO by 'nik' and delete it
        $dpo = Dpo::where('nik', $nik)->firstOrFail();
        $dpo->delete();
    
        return redirect()->route('superadmin.dpo.index')->with('success', 'DPO deleted successfully.');
    }    
}
