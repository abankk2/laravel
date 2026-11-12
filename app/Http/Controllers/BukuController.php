<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul'         => 'required|min:3',
            'pengarang'     => 'required|min:3',
            'tahun_terbit'  => 'required|integer',
        ]);

        Buku::create($validate);

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Buku::all();
        $bukuDetail = Buku::findOrFail($id);
        return view('buku.index', compact('buku', 'bukuDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'judul'         => 'required|min:3',
            'pengarang'     => 'required|min:3',
            'tahun_terbit'  => 'required|integer',
        ]);

        Buku::where('id', $id)->update($validate);

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bukuDetail = Buku::findOrFail($id);
        $bukuDetail->delete();

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
