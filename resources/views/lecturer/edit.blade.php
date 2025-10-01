@extends('layouts.app')

@section('content')
    <h1>Edit Dosen</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('lecturers.update', $lecturer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $lecturer->name }}" required>
        </div>
        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="nidn" class="form-control" value="{{ $lecturer->nidn }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $lecturer->email }}" required>
        </div>
        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="department" class="form-control" value="{{ $lecturer->department }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
