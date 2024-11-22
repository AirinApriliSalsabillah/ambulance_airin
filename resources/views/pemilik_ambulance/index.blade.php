@extends('layout.app')

@section('title', 'Data Pemilik Ambulance')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Data Pemilik Ambulance</h1>

    <!-- Peta -->
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Peta Lokasi Pemilik Ambulance</h6>
        </div>
        <div class="card-body">
            <div id="map" style="height: 400px; border-radius: 10px; overflow: hidden; border: 1px solid #ddd;"></div>
        </div>
    </div>

    <!-- Tabel Data -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('pemilik_ambulance.create') }}" class="btn btn-primary">Tambah Pemilik Ambulance</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Daerah</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemilikAmbulances as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->daerah }}</td>
                                <td>{{ $item->latitude }}</td>
                                <td>{{ $item->longitude }}</td>
                                <td>
                                    <a href="{{ route('pemilik_ambulance.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('pemilik_ambulance.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Koordinat default untuk Pekanbaru
    const defaultLat = 0.5295;
    const defaultLng = 101.4477;

    // Inisialisasi peta
    const map = L.map('map', {
        zoomControl: true,
        attributionControl: false,
    }).setView([defaultLat, defaultLng], 13);

    // Tambahkan tile layer untuk peta
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data © OpenStreetMap contributors',
    }).addTo(map);

    // Tambahkan marker untuk setiap pemilik ambulance
    const locations = @json($pemilikAmbulances);
    locations.forEach(location => {
        if (location.latitude && location.longitude) {
            L.marker([location.latitude, location.longitude])
                .addTo(map)
                .bindPopup(`<strong>${location.nama}</strong><br>${location.alamat}`);
        }
    });

    // Batasi tampilan peta agar tidak terlalu luas
    const bounds = L.latLngBounds(locations.map(location => [location.latitude, location.longitude]));
    if (locations.length > 0) {
        map.fitBounds(bounds, { padding: [50, 50] });
    }
});
</script>
@endpush
