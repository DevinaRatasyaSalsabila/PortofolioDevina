<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexLogin()
    {
        return view('login');
    }

    public function indexRegistrasi()
    {
        return view('registrasi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeRegistrasi(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('login');
    }
    public function storeLogin(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('admin');
        } else {
            return redirect()->back()->with('gagal', '*Email atau Password Anda Salah');
        }
    }
}
