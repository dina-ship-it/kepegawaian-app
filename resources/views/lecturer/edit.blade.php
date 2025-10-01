@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Dosen</h2>
    <form action="{{ route('lecturers.update', $lecturer->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" value="{{ $lecturer->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $lecturer->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="phone" value="{{ $lecturer->phone }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
