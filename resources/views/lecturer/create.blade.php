@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Dosen</h2>
    <form action="{{ route('lecturers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
