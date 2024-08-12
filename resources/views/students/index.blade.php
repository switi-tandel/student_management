@extends('layouts.admin')

@section('title', 'Students')

@section('content')
<div class="container">
    <h1>Student List</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    <!-- Custom Search Label and Input -->
    <!-- <div class="row mb-3">
        <div class="col-md-4 offset-md-8">
            <input type="text" id="studentSearch" class="form-control float-end" placeholder="Search">
        </div>
    </div> -->
    <table id="studentsTable" class="table table-striped">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Class Teacher</th>
                <th>Class</th>
                <th>Admission Date</th>
                <th>Yearly Fees</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $index =>$student)
                <tr>
                    <td>{{ $students->firstItem() + $index }}</td>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->teacher->teacher_name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->admission_date }}</td>
                    <td>${{ $student->yearly_fees }}</td>
                    <td>
                        @if($student->trashed())
                            <form action="{{ route('students.restore', $student->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success">Restore</button>
                            </form>
                        @else
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="delete-form" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-button">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $students->links('pagination::bootstrap-4') }}
    </div>
</div>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        var table = $('#studentsTable').DataTable({
            paging: false,
            ordering: true,
            searching: true,
        });

        $('#studentSearch').on('keyup', function() {
            table.search(this.value).draw();
        });
        // SweetAlert delete confirmation
        $('.delete-button').on('click', function(e) {
            e.preventDefault();
            var form = $(this).closest('.delete-form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form to delete the record
                }
            });
        });
    });
</script>
@endsection

@endsection
