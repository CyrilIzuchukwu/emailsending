<?php

namespace App\Http\Controllers;

use App\Models\PrivateVacation;
use Illuminate\Http\Request;

class VacationController extends Controller
{
    //

    public function showForm()
    {
        return view('private-vacation');
    }


    public function submitForm(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female,Other',
            'date_of_birth' => 'required|date',
            'marital_status' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'airport' => 'required|string|max:255',
            'meeting_point' => 'required|string|max:255',
            'vacation_date' => 'required|date',
            'mobile_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'employer' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
        ]);

        // Store the validated data in the database
        PrivateVacation::create($request->all());

        // Redirect back with a success message
        return redirect()->route('vacation.form')->with('success', 'Your vacation form has been submitted successfully!');
    }



    public function feedbacks()
    {
        $feedbacks = PrivateVacation::orderBy('created_at', 'desc')->get();
        return view('admin.mail.feedbacks', compact('feedbacks'));
    }


    public function delete_feedback($id)
    {
        $data = PrivateVacation::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Feedback Deleted');
    }


    public function feedback_details($id)
    {
        $feedback = PrivateVacation::findOrFail($id);
        return view('admin.mail.feedback-details', compact('feedback'));
    }


}
