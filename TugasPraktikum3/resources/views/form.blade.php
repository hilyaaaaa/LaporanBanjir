@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Form Pelaporan Banjir</h2>

    <form action="{{ route('konfirmasi') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="nama">Nama Pelapor</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian</label>
            <input type="text" id="lokasi" name="lokasi" required>
        </div>

        <div class="form-group">
            <label for="tinggi">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi" name="tinggi" required>
        </div>

        <button type="submit">Kirim Laporan</button>

    </form>

</div>

@endsection