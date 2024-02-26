<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class AuthController extends Controller
{
     public function userRegisterPage() {
            return view('auth.register');
     }

     public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
     }

     public function handleGoogleCallback()
     {
         try {
             $user = Socialite::driver('google')->user();

             if (!$user->email) {
                 throw new Exception('Failed to retrieve user email.');
             }

             $data['email'] = $user->email;
             $data['otp'] = $this->generateNewOtp();

             return view('home', $data)->with('success', 'Authentication successful.');
         } catch (Exception $e) {
             return redirect()->route('login')->with('error', 'Authentication error: ' . $e->getMessage());
         }
     }

     public function generateNewOtp()
     {
         return Str::random(6);
     }
 }

