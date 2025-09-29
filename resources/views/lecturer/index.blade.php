@extends('layouts.app')

@section('title', 'Lecturer Page')

@section('content')
    <h3 class="fw-bold">Lecturer Page</h3>
    <p>Welcome to the Lecturer management module.</p>

    <div class="mt-4">
        <a href="{{ route('lecturers.create') }}" class="btn btn-success mb-3">Add New Lecturer</a>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($lecturers as $index => $lecturer)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $lecturer->name }}</td>
                        <td>{{ $lecturer->email }}</td>
                        <td>{{ $lecturer->department }}</td>
                        <td>
                            <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No lecturer data available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
