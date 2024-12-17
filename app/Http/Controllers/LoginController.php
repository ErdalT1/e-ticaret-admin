<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // 1. Giriş bilgilerini doğrula
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Kullanıcıyı doğrula
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Oturum başlatıldı, kullanıcıyı rolüne göre yönlendir
            $role = Auth::user()->role->name;

            switch ($role) {
                case 'Admin':
                    return redirect()->route('admin.dashboard');
                case 'StoreOwner':
                    return redirect()->route('store.dashboard');
                case 'Customer':
                    return redirect()->route('customer.dashboard');
                default:
                    Auth::logout();
                    return redirect()->route('login')->with('error', 'Geçersiz rol.');
            }
        }

        // Giriş başarısız oldu
        return back()->withErrors([
            'email' => 'Girdiğiniz bilgiler yanlış.',
        ]);
    }
}

