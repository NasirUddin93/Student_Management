<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Add Student')

@section('content')

<div class="container mt-5 mb-5" style="width: 400px;">
	<div class="card">
		<div class="card-body">
			   <h2 class="mb-4">Registration Form</h2>
          <form method="post" action="{{ route('student.add') }}">
              @csrf 
              <div class="mb-3">
                  <label for="id" class="form-label">ID</label>
                  <input type="text" class="form-control" name="id" id="id" placeholder="Enter ID" value="{{ old('id') }}">
                  @error('id')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}">
                  @error('name')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="batch" class="form-label">Batch</label>
                  <input type="text" class="form-control" name="batch" id="batch" placeholder="Enter Batch" value="{{ old('batch') }}">
                  @error('batch')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ old('email') }}">
                  @error('email')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="contact" class="form-label">Contact</label>
                  <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact Number" value="{{ old('contact') }}">
                  @error('contact')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                  @error('password')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
          </form>


		</div>
	</div>

  </div>

@endsection
