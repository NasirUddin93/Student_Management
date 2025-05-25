@extends('layouts.app')

@section('title', 'Students List')

@section('content')
    <div class="card">
        <div class="card-header"><h4>Students Table</h4></div>
        <div class="card-body">
            <table id="studentsTable" class="display table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Batch</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
				     @foreach($students as $student)
				            <tr>
				                <td>{{ $student->id }}</td>
				                <td>{{ $student->name }}</td>
				                <td>{{ $student->batch }}</td>
				                <td>{{ $student->email }}</td>
				                <td>{{ $student->contact }}</td>
								<td>
								    <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm">
								        <i class="fas fa-plus"></i> Add
								    </a>

								    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">
								        <i class="fas fa-eye"></i> View
								    </a>

								    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
								        <i class="fas fa-edit"></i> Edit
								    </a>

								    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
								        @csrf
								        @method('DELETE')
								        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
								            <i class="fas fa-trash-alt"></i> Delete
								        </button>
								    </form>
								</td>

				            </tr>
				        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#studentsTable').DataTable();
    });
</script>
@endpush
