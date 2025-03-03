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

        

        if(! Auth::attempt($validation)){
            throw ValidationException::withMessages([
                'email' => 'please check your mail',
                'password' => 'please check your password'
                
              ]);
           }
    
           request()->session()->regenerate();
    
           return redirect('/dashboard');
        }

        public function edit(User $user){
          
            return view('admin.update', ['user' => $user]);
        }


        public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,',
            'password' => 'nullable|min:6|confirmed',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        dd('successfully update');
        //return redirect()->back();
    }
        
        
}
