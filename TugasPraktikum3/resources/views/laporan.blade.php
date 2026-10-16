
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Laporan Banjir</h2>

    @forelse ($laporan as $item)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $item->nama_pelapor }}</h5>
                <p>Lokasi: {{ $item->lokasi }}</p>
                <p>Tinggi Genangan: {{ $item->tinggi_genangan }} cm</p>
                <p>Tanggal Kejadian: {{ $item->tanggal_kejadian }}</p>

                <p>Status:
                    @if ($item->tinggi_genangan < 30)
                        Waspada
                    @elseif ($item->tinggi_genangan <= 70)
                        Siaga
                    @else
                        Awas
                    @endif
                </p>
            </div>
        </div>
    @empty
        <p>Belum ada laporan banjir.</p>
    @endforelse
</div>
@endsection
