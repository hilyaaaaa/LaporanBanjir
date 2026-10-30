
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Profil Petugas BPBD</h2>

    <p>Nama: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
    <p>
        Waktu Pembuatan Akun:
        {{ Auth::user()->created_at->format('d-m-Y H:i:s') }}
    </p>
</div>
@endsection
