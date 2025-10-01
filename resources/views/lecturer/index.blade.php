@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Lecturers</h1>
    <a href="{{ route('lecturers.create') }}" class="btn btn-primary mb-3">Tambah Lecturer</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Email</th>
                <th>Department</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($lecturers as $lecturer)
                <tr>
                    <td>{{ $lecturer->id }}</td>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->nidn }}</td>
                    <td>{{ $lecturer->email }}</td>
                    <td>{{ $lecturer->department }}</td>
                    <td>
                        <a href="{{ route('lecturers.show', $lecturer->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
