<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Exception;


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
             $data['otp'] = $this->generateNumericOTP(6);

             return view('home', $data)->with('success', 'Authentication successful.');
         } catch (Exception $e) {
             return redirect()->route('login')->with('error', 'Authentication error: ' . $e->getMessage());
         }
     }

     function generateNumericOTP($length) {
        $digits = '0123456789';
        return substr(str_shuffle($digits), 0, $length);
    }
 }

