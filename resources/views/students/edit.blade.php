@extends('layouts.admin')

@section('title', 'Student')

@section('content')
<div class="container">
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="student_name">Student Name</label>
            <input type="text" name="student_name" class="form-control" value="{{ old('student_name', $student->student_name) }}">
            @error('student_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email',$student->email) }}" required>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

        <div class="form-group">
            <label for="class_teacher_id">Class Teacher</label>
            <select name="class_teacher_id" class="form-control">
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ $teacher->id == $student->class_teacher_id ? 'selected' : '' }}>{{ $teacher->teacher_name }}</option>
                @endforeach
            </select>
            @error('class_teacher_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <input type="text" name="class" class="form-control" value="{{ old('class', $student->class) }}">
            @error('class')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="admission_date">Admission Date</label>
            <input type="date" name="admission_date" class="form-control" value="{{ old('admission_date', $student->admission_date) }}">
            @error('admission_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="yearly_fees">Yearly Fees</label>
            <input type="number" name="yearly_fees" class="form-control" value="{{ old('yearly_fees', $student->yearly_fees) }}">
            @error('yearly_fees')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
