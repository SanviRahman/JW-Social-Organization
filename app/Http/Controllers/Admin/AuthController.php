<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        $user = env('ADMIN_USER');
        $pass = env('ADMIN_PASSWORD');
        if ($request->input('username') === $user && $request->input('password') === $pass) {
            $request->session()->put('is_admin', true);
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }
        return back()->withErrors(['username' => 'ভুল ইউজারনেম বা পাসওয়ার্ড'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
