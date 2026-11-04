<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Applicant;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    #untuk admin melihat pendaftarnya
    public function view_join() {
        $dataJoin = Applicant::all();

        return view('admin.pendaftar', compact('dataJoin'));
    }

    #buat pendaftar masuk
    public function join_index() {
        return view('auth.join');
    }

    public function join_add(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|numeric|digits:8|unique:applicants,nim',
            'kampus' => 'required|string',
            'divisi' => 'required|string',
            'no_hp' => 'required|string',
            'detail' => 'required|string'
        ]);

        Applicant::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kampus' => $request->kampus,
            'divisi' => $request->divisi,
            'no_hp' => $request->no_hp,
            'detail' => $request->detail,
        ]);
    }

    #login si admin
    public function log_index() {
        return view('auth.login');
    }

    public function log_admin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role === 'admin') {
                return redirect()->route('member.index')->with('succes', 'Login berhasil');
            } 
        }

        return back()->withErrors([
            'email' => 'Email atau password tidak sesuai!',
        ])->onlyInput('email');
    }

    public function logout_admin(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session->regenerateToken();

        return redirect()->route('home.welcome')->with('succes', 'logout berhasil');
    }
}
