<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class userController extends Controller
{
    public function index(){
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
 
        return redirect('/dashboard');
    }

    public function login(Request $request){
        $validation = $request->validate([
            
            'email' => 'required','email',
            'password' => 'required',

        ]);

        

        if(! Auth::guard('web')->attempt($validation)){
            throw ValidationException::withMessages([
                'email' => 'please check your mail',
                'password' => 'please check your password'
                
              ]);
           }
    
           request()->session()->regenerate();
    
           return redirect('/dashboard');
        }

    public function show()
    {   

        return view('admin.show_user', ['user' => Auth::user()]);
    }

    public function edit($id)
    {   

        $users = User::findOrFail($id);
        $users = User::all();
        return view('admin.update',  compact('users'));
    }

   
    public function update(Request $request)
    {
       

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users' ,
            'password' => 'nullable|min:8',
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
        
}
