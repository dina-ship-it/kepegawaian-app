@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Dosen</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Dosen</th>
                <th>Departemen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lecturers as $lecturer)
            <tr>
                <td>{{ $lecturer['id'] }}</td>
                <td>{{ $lecturer['name'] }}</td>
                <td>{{ $lecturer['department'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection