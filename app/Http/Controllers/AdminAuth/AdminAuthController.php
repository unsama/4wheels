<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminAuthController extends Controller
{
    // Show the login form using Inertia
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle login logic
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the admin
        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();
            // Redirecting to an Inertia component
            return redirect('/admin/dashboard'); 
        }

        // Return with errors if login fails
        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    // Logout logic
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');  // Redirect to the base URL or login page
    }

    // Admin dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
        // return Inertia::render('Admin/Dashboard/Home', [
        //     'phpVersion' => '8.0.2'
        // ]); 
    }
}
