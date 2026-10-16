<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function konfirmasi(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'lokasi' => 'required|string|max:255',
        'tinggi' => 'required|integer|min:0',
    ]);

    $data = Laporan::create([
        'nama_pelapor' => $request->nama,
        'lokasi' => $request->lokasi,
        'tinggi_genangan' => $request->tinggi,
        'tanggal_kejadian' => now()->toDateString(),
    ]);

    return view('konfirmasi', compact('data'));
}

    
public function laporan()
{
    $laporan = \App\Models\Laporan::all();

    return view('laporan', compact('laporan'));
}


        
    }
