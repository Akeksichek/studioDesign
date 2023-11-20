<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function Auth(){
        return view('index');
    }
    public function login(Request $request)
    {
        $Auth = $request->validate([
            "name" => ['required'],
            "password" => ['required']
        ]);
        if(Auth::attempt($Auth))
        {
            $request->session()->regenerate();

            $user = Auth::user();
            if($user->role === 'admin'){
                return redirect()->intended('/admin_profile');
            }
            else {
                return redirect()->intended('/');   
            }
        }
    }
    public function Registr(){
        return view('index');
    }

    public function register(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => 'user',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);

        Auth::login($user);

        if($user->role == 'admin')
            return redirect()->intended('/admin_profile');
        else
            return redirect()->intended('/');
        

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    } 

}

class orderController extends Controller
{
    public function Order()
    {
        return view('createOrder');
    }
    public function bron(Request $request)
    {
        $Order = request()->validate([
            "email" => ['required'],
            "category" => ['required'],
            "study" => ['required'],
            "datetime" => ['required'],
        ]);
    }
    
}
