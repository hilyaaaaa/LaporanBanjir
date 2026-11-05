<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    // Form pelaporan warga
    public function form()
    {
        return view('form');
    }

    // Menyimpan laporan dari warga
    public function konfirmasi(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'lokasi' => 'required|string',
            'kecamatan' => 'required|string|max:255',
            'tinggi_air' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $foto = $request->file('foto')->store('foto-laporan', 'public');

       $data = Laporan::create([
    'nama_pelapor' => $request->nama_pelapor,
    'no_hp' => $request->no_hp,
    'lokasi' => $request->lokasi,
    'kecamatan' => $request->kecamatan,
    'tinggi_air' => $request->tinggi_air,
    'tinggi_genangan' => $request->tinggi_air,
    'tanggal_kejadian' => now()->toDateString(),
    'keterangan' => $request->keterangan,
    'foto' => $foto,
    'status' => 'Menunggu',
]);

        return view('konfirmasi', compact('data'))
            ->with('success', 'Laporan berhasil dikirim!');
    }

    // Menampilkan semua laporan
    public function index()
    {
        $laporan = Laporan::latest()->paginate(10);

        return view('laporan', compact('laporan'));
    }

    // Menampilkan form tambah laporan petugas
    public function create()
    {
        return view('laporan.create');
    }

    // Menyimpan laporan dari halaman petugas
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'lokasi' => 'required|string',
            'kecamatan' => 'required|string|max:255',
            'tinggi_air' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->except('foto');

$data['tinggi_genangan'] = $request->tinggi_air;
$data['tanggal_kejadian'] = now()->toDateString();
$data['foto'] = $request->file('foto')->store('foto-laporan', 'public');
$data['status'] = 'Menunggu';

Laporan::create($data);

        return redirect()->route('laporan.index')
            ->with('success', 'Laporan berhasil ditambahkan!');
    }

    // Detail laporan
    public function show(Laporan $laporan)
    {
        return view('laporan.show', compact('laporan'));
    }

    // Form edit laporan
    public function edit(Laporan $laporan)
    {
        return view('laporan.edit', compact('laporan'));
    }

    // Memperbarui laporan
    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'lokasi' => 'required|string',
            'kecamatan' => 'required|string|max:255',
            'tinggi_air' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
            'status' => 'required|in:Menunggu,Diproses,Selesai',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->except('foto');

$data['tinggi_genangan'] = $request->tinggi_air;
        if ($request->hasFile('foto')) {
            if ($laporan->foto) {
                Storage::disk('public')->delete($laporan->foto);
            }

            $data['foto'] = $request->file('foto')
                ->store('foto-laporan', 'public');
        }

        $laporan->update($data);

        return redirect()->route('laporan.index')
            ->with('success', 'Laporan berhasil diperbarui!');
    }

    // Menghapus laporan
    public function destroy(Laporan $laporan)
    {
        if ($laporan->foto) {
            Storage::disk('public')->delete($laporan->foto);
        }

        $laporan->delete();

        return redirect()->route('laporan.index')
            ->with('success', 'Laporan berhasil dihapus!');
    }
}
