<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function home() {
        return view("home");
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Invalid email or password.',
            ])->withInput($request->only('email'));
        }
    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }



    public function dashboard(){
        $user = Auth::user();

        return view('dashboard', ['user' => $user]);
    }

    public function terms(){
        $user = Auth::user();

        return view('terms', ['user' => $user]);
    }


//    USER PAGE
    public function userIndex(){
        $user = Auth::user();

        return view('user', ['user' => $user]);
    }

    public function registerIndex(){
        return view('register');
    }

    public function registerUser(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        return redirect()->route('login');
    }

    public function userUpdate(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::find($request->user()->id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->back()->with('success', 'User data updated successfully');
    }


    public function masterIndex(){
        $user = Auth::user();

        return view('master', ['user' => $user]);
    }








}
