<?php

namespace App\Http\Controllers\Api\Atuh;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AuthenticatedSessionController extends Controller
{
    public function login(Request $request)
    {
         // Validasi input login
         $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Mencoba untuk login
        if (Auth::attempt($credentials)) {
            // Regenerasi session setelah login berhasil
            $request->session()->regenerate();

            // Arahkan ke dashboard
            return redirect()->to('/dashboard');
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'register' => 'Login gagal, periksa kembali kredensial Anda.',
        ]);
    }
    
    protected function isTokenValid($token, $user)
    {
        // Cek apakah token sudah ada
        $existingToken = PersonalAccessToken::where('tokenable_id', $user->id)
            ->where('tokenable_type', User::class)
            ->where('token', $token) // pastikan token sudah di-hash
            ->first();
        
        // Jika token tidak ada, buat token baru
        if (!$existingToken) {
            return [
                'valid' => false,
                'new_token' => $user->createToken('auth_token')->plainTextToken,
            ];
        }
        
        // Jika token ada, kembalikan status valid
        return ['valid' => true];
    }

    // private function validateToken($token, $user)
    // {
    //     // Implementasi validasi token (misalnya cocokkan dengan token di database)
    //     return $user->token === $token;
    // }
}
