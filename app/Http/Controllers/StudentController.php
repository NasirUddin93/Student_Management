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
        return view('student.listStudent');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.addStudent');
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
            return redirect()->back()->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
