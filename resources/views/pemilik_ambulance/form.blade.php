<!-- resources/views/pemilik_ambulance/form.blade.php -->

@extends('layouts.master')

@section('content')
<div class="container">
    <h1>{{ isset($pemilikAmbulance) ? 'Edit Pemilik Ambulance' : 'Tambah Pemilik Ambulance' }}</h1>
    <form action="{{ isset($pemilikAmbulance) ? route('pemilik_ambulance.update', $pemilikAmbulance->id_pemilik) : route('pemilik_ambulance.store') }}" method="POST">
        @csrf
        @if(isset($pemilikAmbulance))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $pemilikAmbulance->nama ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $pemilikAmbulance->alamat ?? '' }}" required>
        </div>
        <!-- Fields lainnya sesuai kebutuhan -->
        <button type="submit" class="btn btn-success">{{ isset($pemilikAmbulance) ? 'Update' : 'Save' }}</button>
        <a href="{{ route('pemilik_ambulance.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
