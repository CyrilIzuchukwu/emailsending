<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // use SendsPasswordResetEmails;

    protected function forgetPassword()
    {
        return view('auth.passwords.forget-password');
    }


    function sendMail($email, $code)
    {
        // Preparing the email data
        $data = array(
                'body' => $code,
            );

        // Defining the email view
        $view = 'email.password_reset';

        // Sending the email
        try {
            Mail::send($view, $data, function ($message) use ($email) {
                $message->to($email, 'BTS')->subject('BTS Reset Password Notification');
                // $message->from('shopwisesupport@gmail.com', 'Shopwise');
            });
        } catch (Exception $th) {
            return false;
        }
    }


    // first step
    protected function forgotPassword(Request $request)
    {
        $activation_code = random_int(100000, 999999);
        // finding the user by email
        $user = User::where("email", $request->email)->first();


        if ($user) {
            // dd($activation_code, $user);
            // $user->update(['activation_code' => $activation_code]);
            try {
                $user->activation_code = $activation_code;
                $user->save();
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Could not update activation code');
            }
            $this->sendMail($user->email, $activation_code);

            return redirect()->route('confirmCode.email', ["user_email" => $user->email]);
        } else {
            return redirect()->route('forgetPassword')->with('error', 'Invalid Email');
        }
    }


    // second step
    protected function confirmCode()
    {
        return view("auth.passwords.confirm_code", ["email" => request()->user_email]);
    }

    // third step
    protected function submitPasswordResetCode(Request $request)
    {
        $code = $request->code;
        $email = $request->user_email;
        $account = User::where('email', $email)->first() ?? false;
        if ($account) {
            if ($code == $account->activation_code) {
                return redirect()->route('password-reset', ["user_email" => $email]);
            } else {
                return redirect()->route('confirmCode.email', ["user_email" => $email])->with('error', 'Invalid Code');
            }
        } else {
            return redirect()->back()->with('error', 'Account not found');
        }
    }

    // fourth step
    protected function password_reset()
    {
        return view("auth.passwords.reset-password", ["email" => request()->user_email]);
    }


    // fifth step
    protected function createNewPassword(Request $request)
    {
        if ($request->password !== $request->confirm_password) {
            return redirect()->back()->with('error', 'Password Mismatch');
        } else {
            $password = Hash::make($request->password);
            $user = User::where("email", $request->user_email)->first();
            // $user->update(['password' => $password]);
            try {
                $user->password = $password;
                $user->save();
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Failed to update password');
            }
            return redirect()->route("login")->with('message', 'Password updated successfully, please login');
        }
    }

    // last step
    public function resend_code($email)
    {
        $activation_code = random_int(100000, 999999);
        // finding the user by email
        $user = User::where("email", $email)->first();

        if ($user) {
            try {
                $user->activation_code = $activation_code;
                $user->save();
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Could not update activation code');
            }
            $this->sendMail($user->email, $activation_code);

            return redirect()->route('confirmCode.email', ["user_email" => $user->email])->with('message', 'Code Resent');
        } else {
            return redirect()->route('forgetPassword')->with('error', 'Invalid Email');
        }
    }
}

