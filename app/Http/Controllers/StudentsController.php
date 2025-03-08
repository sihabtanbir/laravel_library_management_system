<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.student_login');
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

    public function login(Request $request){
        $validation = $request->validate([
            
            'email' => 'required','email',
            'password' => 'required',

        ]);

        

        if(! Auth::guard('student')->attempt($validation)){
            throw ValidationException::withMessages([
                'email' => 'please check your mail',
                'password' => 'please check your password'
                
              ]);
           }
    
           request()->session()->regenerate();
    
           return redirect('student_dashboard');
          
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function show_student()
    {
        $students = Students::all();
        return view('student.show_student', compact('students'));
    }

    public function edit($id)
    {
       $students = Students::findOrFail($id);
       $students = Students::all();
        return view('student.update',  compact('students'));
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
    public function logoutStudent(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/student_login');
    }
       
}
