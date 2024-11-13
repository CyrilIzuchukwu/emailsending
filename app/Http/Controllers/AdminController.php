<?php

namespace App\Http\Controllers;

use App\Models\PrivateVacation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function admin_dashboard()
    {
        $lastestFeedbacks = PrivateVacation::orderBy('created_at', 'desc')->take(5)->get();
        return view('admin.index', compact('lastestFeedbacks'));
    }

    // profile
    public function profile_setting()
    {
        return view('admin.profile');
    }

    public function profile_update(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        // Update the authenticated user's profile
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }



    public function password_update(Request $request)
    {
        // Validate the request
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8',
            'new_password_confirmation' => 'required|string|min:8|same:new_password',
        ]);

        $user = Auth::user();

        // Check if the old password matches
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'The old password is incorrect.');
        }

        // Check if new password matches confirm password
        if ($request->new_password !== $request->new_password_confirmation) {
            return redirect()->back()->with('error', 'The confirm password does not match.');
        }

        // Update the user's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect back with a success message
        return redirect()->route('profile_setting')->with('success', 'Password updated successfully.');
    }
}
