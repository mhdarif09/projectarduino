<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dpo;

class DpoController extends Controller
{
    public function __construct()
    {
        // Ganti 'super_admin' dengan middleware role yang sesuai
        $this->middleware('role:super_admin');  // Hanya bisa diakses oleh super_admin
    }

    // Menampilkan daftar DPO
    public function index()
    {
        $dpos = Dpo::all();
        return view('superadmin.dpo.index', compact('dpos'));
    }

    // Menampilkan form tambah DPO
    public function create()
    {
        return view('superadmin.dpo.create');
    }

    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nik' => 'required|string|size:16|unique:dpo', // Pastikan nama tabelnya sesuai
        'name' => 'required|string|max:255',
        'status' => 'required|in:DPO,Bukan DPO',
    ]);

    // Menyimpan data DPO
    Dpo::create($request->only(['nik', 'name', 'status']));

    // Redirect setelah data disimpan
    return redirect()->route('superadmin.dpo.index')->with('success', 'DPO created successfully');
}
    // Menampilkan form edit DPO
    public function edit($nik)
    {
        $dpo = Dpo::findOrFail($nik);
        return view('superadmin.dpo.edit', compact('dpo'));
    }

    // Memperbarui DPO
    public function update(Request $request, $nik)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:DPO,Bukan DPO',
        ]);

        $dpo = Dpo::findOrFail($nik);
        $dpo->update($request->all());

        return redirect()->route('superadmin.dpo.index')->with('success', 'DPO updated successfully');
    }

    // Menghapus DPO
    public function destroy($nik)
    {
        Dpo::destroy($nik);

        return redirect()->route('superadmin.dpo.index')->with('success', 'DPO deleted successfully');
    }
}
