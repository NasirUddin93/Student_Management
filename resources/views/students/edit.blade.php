@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
	<div class="container" style="width: 400px;">
	 	<div class="card">
	        <div class="card-header"><h4>Edit Student</h4></div>
	        <div class="card-body">
	            <form action="{{ route('students.update', $student->id) }}" method="POST">
	                @csrf
	                @method('PUT')

	                <div class="form-group">
	                    <label>Name:</label>
	                    <input type="text" name="name" value="{{ $student->name }}" class="form-control" required>
	                </div>

	                <div class="form-group">
	                    <label>Batch:</label>
	                    <input type="text" name="batch" value="{{ $student->batch }}" class="form-control" required>
	                </div>

	                <div class="form-group">
	                    <label>Email:</label>
	                    <input type="email" name="email" value="{{ $student->email }}" class="form-control" required>
	                </div>

	                <div class="form-group">
	                    <label>Contact:</label>
	                    <input type="text" name="contact" value="{{ $student->contact }}" class="form-control" required>
	                </div>

	                <button type="submit" class="btn btn-primary">Update</button>
	                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
	            </form>
	        </div>
	    </div>	
	</div>

@endsection
