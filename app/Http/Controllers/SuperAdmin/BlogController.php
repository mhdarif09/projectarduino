<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // Middleware untuk memastikan hanya super_admin yang bisa mengakses
    public function __construct()
    {
        $this->middleware('role:super_admin'); // Pastikan menggunakan role middleware sesuai dengan implementasi Anda
    }

    // Menampilkan daftar blog di halaman welcome.blade.php
    public function index()
    {
        $blogs = Blog::all();
        return view('superadmin.blog.index', compact('blogs'));
    }

    // Menambah blog baru
    public function create()
    {
        return view('superadmin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan gambar
        $imagePath = $request->file('image')->store('public/blog_images');

        // Menyimpan data blog
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('superadmin.blog.index')->with('success', 'Blog berhasil ditambahkan!');
    }

    // Edit blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('superadmin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Blog::findOrFail($id);

        // Jika ada gambar baru, simpan dan hapus gambar lama
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::delete($blog->image);

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('public/blog_images');
            $blog->image = $imagePath;
        }

        // Update data blog
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('superadmin.blog.index')->with('success', 'Blog berhasil diperbarui!');
    }

    // Menghapus blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Hapus gambar terkait
        Storage::delete($blog->image);

        // Hapus blog
        $blog->delete();

        return redirect()->route('superadmin.blog.index')->with('success', 'Blog berhasil dihapus!');
    }
}
