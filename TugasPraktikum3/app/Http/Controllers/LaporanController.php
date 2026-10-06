<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function konfirmasi(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi' => $request->tinggi,
        ];

        return view('konfirmasi', compact('data'));
    }

    public function laporan()
    {
        $laporan = [
            [
                'nama' => 'Andi',
                'lokasi' => 'Dayeuhkolot',
                'tinggi' => 25
            ],
            [
                'nama' => 'Siti',
                'lokasi' => 'Baleendah',
                'tinggi' => 50
            ],
            [
                'nama' => 'Rizky',
                'lokasi' => 'Bojongsoang',
                'tinggi' => 85
            ],
        ];

        return view('laporan', compact('laporan'));
    }
}