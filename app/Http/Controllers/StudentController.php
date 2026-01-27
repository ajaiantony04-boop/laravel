<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('dashboard', compact('students'));
    }

    public function edit(Student $student)
{
    return view('students.edit', compact('student'));
}

    public function update(Request $request, $id)
    {


        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('home')
                         ->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Student deleted successfully');
    }


    public function create()

    {
        return view('students.create');
    }

     public function add(request $request)

    {
        $name= $request->input('name');
        $email= $request->input('email');
        $role= $request->input('role');
        $password = Hash::make($request->password);

        $add = Student::Create([

        'name'  => $name,
        'email' => $email,
        'role'  => $role,
        'password' => $password]
        );
    return redirect()->back()->with('success', 'Student added successfully!');
    }


}
