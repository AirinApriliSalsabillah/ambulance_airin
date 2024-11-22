@extends('layout.app')

@section('title', 'Tambah Pemilik Ambulance')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Tambah Pemilik Ambulance</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Pemilik Ambulance</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pemilik_ambulance.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" name="no_hp" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="daerah" class="form-label">Daerah</label>
                    <input type="text" name="daerah" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="latitude" class="form-label">Latitude</label>
                    <input type="text" id="latitude" name="latitude" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="longitude" class="form-label">Longitude</label>
                    <input type="text" id="longitude" name="longitude" class="form-control" required>
                </div>

                <!-- Map Container -->
                <div id="map" style="height: 40%; width: 100%;"></div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('pemilik_ambulance.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Geolocation untuk mendapatkan latitude dan longitude
        document.addEventListener('DOMContentLoaded', function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    document.getElementById('latitude').value = position.coords.latitude;
                    document.getElementById('longitude').value = position.coords.longitude;
                }, function(error) {
                    alert('Tidak dapat mengakses lokasi Anda. Periksa pengaturan lokasi browser.');
                });
            } else {
                alert('Browser Anda tidak mendukung Geolocation.');
            }
        });
    </script>
@endsection
