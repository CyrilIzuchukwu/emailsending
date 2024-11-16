<?php

namespace App\Http\Controllers;

use App\Mail\FormLinkEmail;
use App\Mail\PlainTextEmail;
use App\Mail\RegisteredMailNotification;
use App\Models\PrivateVacation;
use App\Models\RegisteredMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //.
    public function add_mail()
    {
        return view('admin.mail.add-mail');
    }

    public function store(Request $request)
    {
        // Validation rules
        $request->validate([
            'firstname' => 'nullable|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'email' => 'required|email|unique:registered_mails,email',
        ]);

        // Create the new registered mail record
        RegisteredMail::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'User information registered successfully.');
    }


    public function index()
    {
        $registeredMails = RegisteredMail::all();
        return view('admin.mail.registered-mails', compact('registeredMails'));
    }



    public function edit($id)
    {
        $mail = RegisteredMail::findOrFail($id);
        return view('admin.mail.edit', compact('mail'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'nullable|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
        ]);

        $mail = RegisteredMail::findOrFail($id);
        $mail->update($request->all());

        return redirect()->route('registered-mails.index')->with('success', 'Registered email updated successfully');
    }

    public function destroy($id)
    {
        $mail = RegisteredMail::findOrFail($id);
        $mail->delete();

        return redirect()->route('registered-mails.index')->with('success', ' deleted successfully');
    }


    public function sendEmail($id)
    {
        $mail = RegisteredMail::findOrFail($id);
        return view('admin.mail.send_email1', compact('mail'));
    }

    public function sendEmailProcess(Request $request, $id)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'email_type' => 'required|string|in:plain,form',
        ]);

        $mail = RegisteredMail::findOrFail($id);

        $emailData = [
            'subject' => $request->subject,
            'message' => $request->message,
            'name' => $mail->firstname . ' ' . $mail->lastname,
            'email' => $mail->email,
        ];

        // Determine which email to send based on the selected type
        if ($request->email_type === 'plain') {
            // Send plain text email
            Mail::to($emailData['email'])->send(new PlainTextEmail($emailData));
        } elseif ($request->email_type === 'form') {
            // Send form link email
            Mail::to($emailData['email'])->send(new FormLinkEmail($emailData));
        }

        return redirect()->route('registered-mails.index')->with('success', 'Email sent successfully to ' . $mail->email);
    }


    public function compose_mail()
    {
        return view('admin.mail.compose-email');
    }


    public function sendEmailProcess2(Request $request)
    {

        $request->validate([
            'email' => 'required|email|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'email_type' => 'required|string|in:plain,form',
        ]);

        $emailData = [
            'subject' => $request->subject,
            'message' => $request->message,
            'name' => $request->firstname . ' ' . $request->lastname,
            'email' => $request->email,
        ];


        // Determine which email to send based on the selected type
        if ($request->email_type === 'plain') {
            // Send plain text email
            Mail::to($emailData['email'])->send(new PlainTextEmail($emailData));
        } elseif ($request->email_type === 'form') {
            // Send form link email
            Mail::to($emailData['email'])->send(new FormLinkEmail($emailData));
        }

        return redirect()->route('registered-mails.index')->with('success', 'Email sent successfully');
    }
}
