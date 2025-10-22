<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SIP3D\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    // Redirect ke halaman login Google
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback setelah login Google
    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Simpan atau update user berdasarkan email
            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt('password'), // default password
                ]
            );

            Auth::login($user);

            // Redirect ke dashboard (ubah sesuai role jika perlu)
            return redirect()->route('admin.dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login.pilih')->with('error', 'Login dengan Google gagal!');
        }
    }
}
