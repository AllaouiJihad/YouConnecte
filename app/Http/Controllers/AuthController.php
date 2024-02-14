<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function signup(Request $request){

        $validatedData = $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|email|unique:users|max:255',
          'password' => 'required|string|min:8|confirmed',
      ]);
  
  
      $user = User::create([
          'name' => $validatedData['name'],
          'email' => $validatedData['email'],
          'password' => bcrypt($validatedData['password']),
      ]);
  
  
      if ($user) {
          // Authentication successful
          return redirect()->route('login'); // Redirect to the intended page or your dashboard
      } else {
          // Authentication failed
          return redirect()->route('register');
      }
      }

      public function signin(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->route('home'); // Redirect to the intended page or your dashboard
        } else {
            // Authentication failed
            return redirect()->route('register');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login'); 
    }
}
