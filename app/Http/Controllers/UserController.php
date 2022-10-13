<?php

namespace App\Http\Controllers;

use App\Http\Requests\Places\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(StoreUserRequest $request) {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        auth()->login($user);
        return redirect('/');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login() {
        return view('auth.login');
    }

    public function auth(Request $request) {
        $data = $request->only(['email', 'password']);

        if(auth()->attempt($data)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }


}
