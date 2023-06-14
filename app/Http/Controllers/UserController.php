<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        if (View::exists('user.login')) {
            return view('user.login');
        } else {
            return abort(404);
        }
    }
    public function process(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($validated)) {

            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome to Student List');
        }
        return back()->withErrors(['email' => 'Login Failed'])->onlyInput('email');
    }
    public function register()
    {

        return view('user.register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        Auth::login($user);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Sign Out Successfully!');
    }
}
