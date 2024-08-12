@extends('layouts.admin')

@section('title', 'Teachers')

@section('content')
<div class="container">
    <h1>Teacher List</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->teacher_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
     <!-- Pagination Links -->
     <div class="d-flex justify-content-center">
        {{ $teachers->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
