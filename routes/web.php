<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\VacationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email-template', function () {
    return view('email-template');
});

Route::get('/testing', function () {
    return view('emails.plain_text_email');
});


// Vacation form route
Route::get('/vacation-form/d/e//viewform', [VacationController::class, 'showForm'])->name('vacation.form');

Route::post('/submit-vacation-form', [VacationController::class, 'submitForm'])->name('vacation.submit');


// forget password view
Route::get('auth/forget-password', [ForgotPasswordController::class, 'forgetPassword'])->name('forgetPassword');

// forgot password post
Route::post('forgotPassword', [ForgotPasswordController::class, 'forgotPassword'])->name('forgotPassword.email');

// confirm code view
Route::get('confirmCode', [ForgotPasswordController::class, 'confirmCode'])->name('confirmCode.email');

// submit code post
Route::post('submitPasswordResetCode', [ForgotPasswordController::class, 'submitPasswordResetCode'])->name('submitPasswordResetCode');

// reset password view
Route::get('auth/password-reset', [ForgotPasswordController::class, 'password_reset'])->name('password-reset');

Route::post('createNewPassword', [ForgotPasswordController::class, 'createNewPassword'])->name('createNewPassword');

// RESEND CODE ROUTE
Route::get('resend_code/{email}', [ForgotPasswordController::class, 'resend_code'])->name('resend_code');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');

    // profile setting
    Route::get('admin/profile-setting', [AdminController::class, 'profile_setting'])->name('profile_setting');

    Route::post('admin/profile_update', [AdminController::class, 'profile_update'])->name('profile_update');

    Route::post('admin/password_update', [AdminController::class, 'password_update'])->name('password_update');


    Route::get('admin/add-mail', [MailController::class, 'add_mail'])->name('add_mail');

    Route::post('/register-mail', [MailController::class, 'store'])->name('register-mail');

    Route::get('/registered-mails', [MailController::class, 'index'])->name('registered-mails.index');

    Route::get('/registered-mails/{id}/edit', [MailController::class, 'edit'])->name('registered-mails.edit');
    Route::put('/registered-mails/{id}', [MailController::class, 'update'])->name('registered-mails.update');


    Route::delete('/registered-mails/{id}', [MailController::class, 'destroy'])->name('registered-mails.destroy');


    Route::get('/registered-mails/{id}/send-email', [MailController::class, 'sendEmail'])->name('registered-mails.sendEmail');


    Route::post('/registered-mails/{id}/send-email', [MailController::class, 'sendEmailProcess'])->name('registered-mails.sendEmailProcess');


    Route::get('/compose-mail', [MailController::class, 'compose_mail'])->name('compose-mail.index');


    Route::post('sendEmailProcess2', [MailController::class, 'sendEmailProcess2'])->name('sendEmailProcess2');


    Route::get('admin/feedbacks', [VacationController::class, 'feedbacks'])->name('feedbacks');

    Route::get('admin/delete_feedback/{id}', [VacationController::class, 'delete_feedback'])->name('delete_feedback');

    Route::get('admin/feedback-details/{id}', [VacationController::class, 'feedback_details'])->name('feedback_details');
});
