<div class="laporan-card">

    <h3>{{ $item['lokasi'] }}</h3>

    <p>
        <strong>Nama Pelapor:</strong>
        {{ $item['nama'] }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $item['tinggi'] }} cm
    </p>

    @if ($item['tinggi'] < 30)

        <span class="status waspada">
            Waspada
        </span>

    @elseif ($item['tinggi'] <= 70)

        <span class="status siaga">
            Siaga
        </span>

    @else

        <span class="status awas">
            Awas
        </span>

    @endif

</div>