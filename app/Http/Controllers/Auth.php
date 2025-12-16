<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Users;

class Auth extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        // Default role for public registration
        $validated['role'] = 'Donor';   // ← MUST match your ENUM exactly

        $model = new Users();
        $model->Register_Donor($validated);

        return redirect('auth/login')
               ->with('success', 'Registration successful! You can now log in.');
    }


    public function Show_LogIn() {
        return view('/auth/login');
    }


    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $model = new Users();
        $user = $model->Get_User_By_Username($validated['username']);

        if (!$user || $validated['password'] !== $user->password) {
            throw ValidationException::withMessages([
                'credentials' => 'Incorrect login credentials'
            ]);
        }

        // Store session
        $request->session()->put('user_id', $user->user_id);
        $request->session()->put('username', $user->username);
        $request->session()->put('role', $user->role);

        $request->session()->flash('greeting', "Hi {$user->role} {$user->username}");

        // Redirect according to real ENUM values
        switch ($user->role) {
            case 'Donor':
                return redirect('/donor/dashboard');
            case 'Finance Staff':
                return redirect('/staff/dashboard');
            case 'Admin':
                return redirect('/admin/dashboard');
            default:
                return redirect('/');
        }
    }


    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('home');
    }
}
