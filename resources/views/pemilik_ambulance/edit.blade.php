<!-- resources/views/pemilik_ambulance/edit.blade.php -->

@extends('layout.app')

@section('content')
<div class="container">
    <h1>Edit Pemilik Ambulance</h1>
    <form action="{{ route('pemilik_ambulance.update', $pemilikAmbulance->id_pemilik) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $pemilikAmbulance->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $pemilikAmbulance->alamat }}" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $pemilikAmbulance->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label for="daerah" class="form-label">Daerah</label>
            <input type="text" name="daerah" class="form-control" value="{{ $pemilikAmbulance->daerah }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('pemilik_ambulance.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
