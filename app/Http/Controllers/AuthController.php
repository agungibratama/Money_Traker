<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //tampilan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }
    //tampilan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    //proses register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ], [
            'name.required' => 'Nama lengkap harus diisi.',
            'name.string' => 'Nama lengkap harus berupa teks.',
            'name.max' => 'Nama lengkap tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password harus minimal 8 karakter',
            'password.max' => 'Password tidak boleh lebih dari 255 karakter.'
        ]);

        return $request->all();
    }




}
