@extends('layouts.app')

@section('content')

<div class="container">

    <div class="alert alert-success">
        Laporan berhasil dikirim!
    </div>

    <h2>Data Laporan</h2>

    <p><strong>Nama Pelapor:</strong> {{ $data->nama_pelapor }}</p>

    <p><strong>Nomor HP:</strong> {{ $data->no_hp }}</p>

    <p><strong>Lokasi Kejadian:</strong> {{ $data->lokasi }}</p>

    <p><strong>Kecamatan:</strong> {{ $data->kecamatan }}</p>

    <p><strong>Tinggi Air:</strong> {{ $data->tinggi_air }} cm</p>

    <p><strong>Keterangan:</strong> {{ $data->keterangan ?? '-' }}</p>

    <p><strong>Status:</strong> {{ $data->status }}</p>

    @if ($data->foto)
        <p><strong>Foto Banjir:</strong></p>
        <img src="{{ asset('storage/' . $data->foto) }}"
             alt="Foto Banjir"
             width="300">
    @endif

    <br><br>

    <a href="{{ route('form') }}">Kembali ke Form</a>

</div>

@endsection
