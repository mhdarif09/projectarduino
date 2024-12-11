<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;




class WelcomeController extends Controller
{
    public function index()
{
    $blogs = Blog::latest()->paginate(6); // Tampilkan 6 blog per halaman
    return view('welcome', compact('blogs')); // Passing the blogs to the view
}

public function show()
    {
        // Ambil semua data blog dari database
        $blogs = Blog::all();

        // Kembalikan tampilan welcome dengan data blog
        return view('welcome', compact('blogs'));
    }

    // Menampilkan detail blog
    public function showBlog($id)
    {
        // Cari blog berdasarkan ID
        $blog = Blog::findOrFail($id);

        // Kembalikan tampilan detail blog
        return view('blog.show', compact('blog'));
    }
}
