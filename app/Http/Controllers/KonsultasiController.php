<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasis = Konsultasi::all();
        return view('konsultasi.index', compact('konsultasis'));
    }

    public function create()
    {
        return view('konsultasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'email' => 'required|email',
            'keluhan' => 'required',
            'dokter' => 'required',
            'tanggal' => 'required|date',
        ]);

        Konsultasi::create($request->all());
        return redirect()->route('konsultasi.index')->with('success', 'Data konsultasi berhasil ditambahkan.');
    }

    public function edit(Konsultasi $konsultasi)
    {
        return view('konsultasi.edit', compact('konsultasi'));
    }

    public function update(Request $request, Konsultasi $konsultasi)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'email' => 'required|email',
            'keluhan' => 'required',
            'dokter' => 'required',
            'tanggal' => 'required|date',
        ]);

        $konsultasi->update($request->all());
        return redirect()->route('konsultasi.index')->with('success', 'Data konsultasi berhasil diperbarui.');
    }

    public function destroy(Konsultasi $konsultasi)
    {
        $konsultasi->delete();
        return redirect()->route('konsultasi.index')->with('success', 'Data konsultasi berhasil dihapus.');
    }
}
