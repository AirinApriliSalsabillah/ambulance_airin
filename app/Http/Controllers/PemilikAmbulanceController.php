<?php

namespace App\Http\Controllers;

use App\Models\PemilikAmbulance;
use Illuminate\Http\Request;

class PemilikAmbulanceController extends Controller
{
    // Menampilkan semua data Pemilik Ambulance
    public function index()
    {
        $pemilikAmbulances = PemilikAmbulance::all();
        return view('pemilik_ambulance.index', compact('pemilikAmbulances'));
    }

    // Menampilkan form tambah Pemilik Ambulance
    public function create()
    {
        return view('pemilik_ambulance.create');
    }

    // Menyimpan data Pemilik Ambulance
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'daerah' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        PemilikAmbulance::create($validated);

        return redirect()->route('pemilik_ambulance.index')
                        ->with('success', 'Pemilik Ambulance berhasil ditambahkan');
    }

    // Menampilkan form edit Pemilik Ambulance
    public function edit(PemilikAmbulance $pemilikAmbulance)
    {
        return view('pemilik_ambulance.edit', compact('pemilikAmbulance'));
    }

    // Memperbarui data Pemilik Ambulance
    public function update(Request $request, PemilikAmbulance $pemilikAmbulance)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'daerah' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $pemilikAmbulance->update($validated);

        return redirect()->route('pemilik_ambulance.index')
                        ->with('success', 'Pemilik Ambulance berhasil diperbarui');
    }

    // Menghapus data Pemilik Ambulance
    public function destroy(PemilikAmbulance $pemilikAmbulance)
    {
        $pemilikAmbulance->delete();

        return redirect()->route('pemilik_ambulance.index')
                        ->with('success', 'Pemilik Ambulance berhasil dihapus');
    }
}
