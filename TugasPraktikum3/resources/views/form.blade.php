@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Form Pelaporan Banjir</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            Periksa kembali data yang kamu masukkan.
        </div>
    @endif

    <form action="{{ route('konfirmasi') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label>Nama Pelapor</label>
            <input type="text" name="nama_pelapor"
                value="{{ old('nama_pelapor') }}" required>
            @error('nama_pelapor')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Nomor HP</label>
            <input type="text" name="no_hp"
                value="{{ old('no_hp') }}" required>
            @error('no_hp')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Lokasi Kejadian</label>
            <input type="text" name="lokasi"
                value="{{ old('lokasi') }}" required>
            @error('lokasi')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Kecamatan</label>
            <input type="text" name="kecamatan"
                value="{{ old('kecamatan') }}" required>
            @error('kecamatan')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Tinggi Air (cm)</label>
            <input type="number" name="tinggi_air"
                value="{{ old('tinggi_air') }}" min="0" required>
            @error('tinggi_air')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan">{{ old('keterangan') }}</textarea>
            @error('keterangan')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Foto Banjir (JPG, JPEG, PNG - Maksimal 2 MB)</label>
            <input type="file" name="foto" accept=".jpg,.jpeg,.png" required>
            @error('foto')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit">Kirim Laporan</button>

    </form>

</div>

@endsection
