@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
    <div class="card">
        <div class="card-header"><h4>Student Details</h4></div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $student->id }}</p>
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Batch:</strong> {{ $student->batch }}</p>
            <p><strong>Email:</strong> {{ $student->email }}</p>
            <p><strong>Contact:</strong> {{ $student->contact }}</p>

            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
