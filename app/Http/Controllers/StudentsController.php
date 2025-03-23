<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student.dashboard');
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
        
               $student = new User();
        
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

    public function show_student()
    {
    
         $students = User::all();
         $students = User::where('role', 'student')->get();
        return view('admin.show_student', compact('students'));
     }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
    
         $students = User::where('id', $id=Auth::user()->id)->get();
        return view('student.show_student', compact('students'));
   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = User::where('id', $id=Auth::user()->id)->get();
        
        return view('student.update',  compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable|email|unique:users' ,
            'phone' => 'nullable',
            'session' => 'nullable',
            'semester' => 'nullable',
            'class_roll' => 'nullable',
            'section' => 'nullable',
            'password' => 'nullable',
            
        ]);

        $user = User::findOrFail($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->session = $request->session;
        $user->semester = $request->semester;
        $user->class_roll = $request->class_roll;
        $user->section = $request->section;
        

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

       
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
         $request->session()->regenerateToken();
    
        return redirect('/login');
    }

    public function search()   {
        $search = request("search");
        
        $students = User::where(function ($query) use ($search) {
         $query->where("name","like","%$search%")
        ->orWhere("email","like","%$search%");
        $query->orWhere("phone","like","%$search%");
        });
       $students = $students->paginate(10);
         return view('admin.show_student',compact('students'));
     }
}
