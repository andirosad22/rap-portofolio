<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
       $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);


        // $validateData['password'] =bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);
        
        // $request->session()->flash('success', 'Registeration successfull Please Sign in');
        // $request->session()->flash('status', 'Task was successful!');
        User::create($validateData);
        return redirect('/login')->with('success','Registeration successfull Please Sign in');

    }
}
