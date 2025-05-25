<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // 1️⃣ Validate input
            $validatedData = $request->validate([
                'id'      => 'required|numeric|unique:students,id',
                'name'    => 'required|string|max:255',
                'batch'   => 'required|string|max:10',
                'email'   => 'required|email|unique:students,email',
                'contact' => 'required|string|max:15',
                'password'=> 'required|string|min:5',
            ]);

            // 2️⃣ Hash the password
            $validatedData['password'] = Hash::make($validatedData['password']);

            // 3️⃣ Create the student
            Student::create($validatedData);

            // 4️⃣ Redirect back with success message
            return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $student = Student::findOrFail($id);
            return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'batch' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string|max:20',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');    }
}
