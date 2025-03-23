<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class userController extends Controller
{   
    public function welcome(){
        $students = User::where('role','student')->count();
        $books = Book::count();
        $authors = Author::count();
        $categories = Category::count();  
        return view('welcome', compact('students','books','authors','categories'));
    }
    public function index(){
        $students = User::where('role','student')->count();
        $books = Book::count();
        $authors = Author::count();
        $categories = Category::count();  
        return view('admin.dashboard', compact('students','books','authors','categories'));
    }
    public function loginForm(){
        return view('auth.login');
    }
    public function create(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required','email',
            'password' => 'required',

        ]);

        $user = User::create($validation);

        Auth::login($user);
 
        return redirect('/student_dashboard');
    }

    public function login(Request $request){
        $validation = $request->validate([
            
            'email' => 'required','email',
            'password' => 'required',

        ]);

        
        if(! Auth::attempt($validation)){
            throw ValidationException::withMessages([
                'email' => 'please check your mail',
                'password' => 'please check your password'
                
              ]);
           }

        if(Auth::attempt($validation)){
           
              if(Auth::User()->role == 'admin'){
                return redirect('/dashboard');
            }else{
                return redirect('/student_dashboard');
                }
        };
    
           request()->session()->regenerate();
    
           return redirect('/');
        
    }

    public function show()
    {   
        $users = User::where('id', Auth::user()->id)->get();
        return view('admin.show_user', compact('users'));
    }

    public function edit($id)
    {   

        $users = User::where('id', $id=Auth::user()->id)->get();
       
        return view('admin.update',  compact('users'));
    }

   
    public function update(Request $request)
    {
      
        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable' ,
            'password' => 'nullable',
        ]);

        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

       
        return back();
    }

    public function userLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function deleteStudent($id)
    {
        
        $student = User::findOrFail($id);

        $student->delete();

        return redirect()->back()->with('success', 'student delete');
    }

    public function convertAdmin($id)
    {
        
        $student = User::findOrFail($id);
        $student->role = 'admin';

        $student->save();

        return redirect()->back()->with('success', 'convert to admin');
    }
      
        
} 
