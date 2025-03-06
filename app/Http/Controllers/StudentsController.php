<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'session' => 'required',
            'semester' => 'required',
            'class_roll' => 'required',
            'section' => 'required',
            'password' => 'required',
            

        ]);

       $student = new Students();

       $student->name = $request->name;
       $student->email = $request->email;
       $student->phone = $request->phone;
       $student->session = $request->session;
       $student->semester = $request->semester;
       $student->class_roll = $request->class_roll;
       $student->section = $request->section;
       
       $student->password = $request->password;
       $student->save();
        
 
        return redirect('show_student');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $students = Students::all();
        return view('admin.show_student', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        //
    }
}
