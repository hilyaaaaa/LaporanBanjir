@extends('layouts.app')

@section('content')

<div class="container">

    <x-alert>
        Laporan berhasil dikirim!
    </x-alert>

    <h2>Data Laporan</h2>

    <p><strong>Nama Pelapor:</strong> {{ $data['nama'] }}</p>

    <p><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}</p>

    <p><strong>Tinggi Genangan:</strong> {{ $data['tinggi'] }} cm</p>

</div>

@endsection