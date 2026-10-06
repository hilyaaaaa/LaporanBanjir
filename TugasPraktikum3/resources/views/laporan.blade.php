@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Daftar Laporan Banjir</h2>

    @forelse ($laporan as $item)

        @include('partials.laporan-card', ['item' => $item])

    @empty

        <p>Belum ada laporan banjir.</p>

    @endforelse

</div>

@endsection