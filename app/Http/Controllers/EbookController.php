<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EbookController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'file' => 'required|mimes:pdf,epub|max:10240',
        ]);

        $path = $request->file('file')->store('ebooks');

        // Simpan ke database (opsional)
        // Ebook::create([...])

        return redirect()->back()->with('success', 'eBook berhasil diupload!');
    }
}