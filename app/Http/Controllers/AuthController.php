<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    // Index Tampilan Login
    public function indexLogin(){
        return view('login');
    }

    // Proses Pengecekan Login
    public function checkLogin(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'administrator') {
                return redirect('/administrator');
            } 
            else if (Auth::user()->role == 'waiter') {
                return redirect('/waiter');
            }
            else if (Auth::user()->role == 'kasir'){
                return redirect('/kasir');
            }
            else if (Auth::user()->role == 'owner'){
                return redirect('/owner');
            }
        } 
        else {
            return redirect('/login')->with('alert-fail','Username atau password salah!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login')->with('alert-logout','Berhasil Logout!');
    }

    public function indexTemplate(){
        $user = Auth::user();
        return view('index',['user' => $user]);
    }
}
