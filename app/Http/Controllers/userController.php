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
 
        return redirect('/');
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
    
           return redirect('/');
        }
}
