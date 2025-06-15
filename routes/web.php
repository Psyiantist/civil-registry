<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResidenceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\EmployeeApprovalController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('homepage');
});

// Add route for serving uploaded images
Route::get('/storage/uploads/{filename}', function ($filename) {
    $path = storage_path('app/public/uploads/' . $filename);
    
    if (!file_exists($path)) {
        abort(404);
    }
    
    return response()->file($path);
})->where('filename', '.*');

// Add route for serving announcement files
Route::get('/storage/announcements/{filename}', function ($filename) {
    $path = storage_path('app/public/announcements/' . $filename);
    
    if (!file_exists($path)) {
        abort(404);
    }
    
    return response()->file($path);
})->where('filename', '.*');

// USER ROUTES
Route::view('/home', 'homepage')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/contact', [ContactController::class, 'showUserContact'])->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/feedback', [ContactController::class, 'sendFeedback'])->name('contact.sendFeedback');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginHandler']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register/step1', [RegisterController::class, 'showStep1'])->name('register');
Route::post('/register/step1', [RegisterController::class, 'postStep1']);

Route::get('/register/step2', [RegisterController::class, 'showStep2'])->name('register.step2');
Route::post('/register/step2', [RegisterController::class, 'postStep2']);

Route::post('/forget-password', [AuthController::class, 'forgetPassword'])->name('forget.password');

Route::view('/forget-password/confirmation', 'temporary-views.password-reset-confirmation')->name('password-reset-confirmation');

// Residence Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/residence-homepage', [ResidenceController::class, 'showResidenceHomepage'])->name('residence-homepage');
    Route::get('/residence-appointment', [ResidenceController::class, 'showResidenceAppointment'])->name('residence-appointment');
    Route::get('/residence-requirements', [ResidenceController::class, 'showResidenceRequirements'])->name('residence-requirements');
    Route::get('/residence-faqs', [ResidenceController::class, 'showResidenceFaqs'])->name('residence-faqs');
    Route::get('/residence-about-us', [ResidenceController::class, 'showResidenceAboutUs'])->name('residence-about-us');
    Route::get('/residence-contact-us', [ResidenceController::class, 'showResidenceContactUs'])->name('residence-contact-us');


    Route::get('/residence-appointment', [ResidenceController::class, 'showResidenceAppointment'])->name('residence-appointment');
    Route::get('/residence-requirements', [ResidenceController::class, 'showResidenceRequirements'])->name('residence-requirements');

    Route::get('/residence/profile', [ProfileController::class, 'getUser'])->name('residence.profile');
    Route::put('/residence/profile/update', [ProfileController::class, 'updateProfile'])->name('residence.profile.update');
    Route::post('/residence/profile/remove-image', [ProfileController::class, 'removeProfileImage'])->name('residence.profile.remove-image');
    Route::post('/residence/appointment/store', [AppointmentController::class, 'storeAppointment'])->name('residence.appointment.store');
    Route::get('/residence/appointment/booked-slots', [AppointmentController::class, 'getBookedSlots'])->name('residence.appointment.booked-slots');
});

// ADMIN ROUTES
Route::get('/admin/login', [AuthController::class, 'showEmployeeLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'employeeLoginHandler'])->name('admin.login');
Route::get('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout');
Route::post('/admin/password/update', [AuthController::class, 'updateAdminPassword'])->name('admin.password.update');
Route::post('/admin/forget-password', [AuthController::class, 'adminForgetPassword'])->name('admin.forget.password');

Route::middleware(['auth:employee'])->group(function () {
    Route::get('/admin/homepage', [AdminController::class, 'showHomepage'])->name('admin.homepage');
    Route::get('/admin/appointment', [EmployeeController::class, 'showAdminAppointment'])->name('admin.appointment');
    Route::get('/admin/requirements', [EmployeeController::class, 'showAdminRequirements'])->name('admin.requirements');
    Route::get('/admin/faqs', [EmployeeController::class, 'showAdminFaqs'])->name('admin.faqs');
    Route::get('/admin/about', [EmployeeController::class, 'showAdminAbout'])->name('admin.about');
    Route::get('/admin/contact', [EmployeeController::class, 'showAdminContact'])->name('admin.contact');
    Route::post('/admin/accept-user/{user}', [EmployeeController::class, 'acceptUser'])->name('admin.accept-user');
    Route::post('/admin/reject-user/{user}', [EmployeeController::class, 'rejectUser'])->name('admin.reject-user');
    Route::delete('/admin/delete-user/{user}', [EmployeeController::class, 'deleteUser'])->name('admin.delete-user');

    // Announcement Routes
    Route::put('/admin/announcements/{announcement}', [AnnouncementController::class, 'update'])->name('admin.announcements.update');
    Route::post('/admin/announcements/{announcement}/image', [AnnouncementController::class, 'updateImage'])->name('admin.announcements.updateImage');
    Route::post('/admin/announcements', [AnnouncementController::class, 'store'])->name('admin.announcements.store');
    Route::delete('/admin/announcements/{announcement}', [AnnouncementController::class, 'destroy'])->name('admin.announcements.destroy');
    
    // FAQ Routes
    Route::get('/admin/faqs', [FaqController::class, 'index'])->name('admin.faqs');
    Route::post('/admin/faqs', [FaqController::class, 'store'])->name('admin.faqs.store');
    Route::put('/admin/faqs/{faq}', [FaqController::class, 'update'])->name('admin.faqs.update');
    Route::delete('/admin/faqs/{faq}', [FaqController::class, 'destroy'])->name('admin.faqs.destroy');
    Route::post('/admin/faqs/reorder', [FaqController::class, 'reorder'])->name('admin.faqs.reorder');

    // Contact Routes and Feedback Routes
    Route::get('/admin/contact', [ContactController::class, 'showAdminContact'])->name('admin.contact');
    Route::post('/admin/contact/update', [ContactController::class, 'updateContact'])->name('contact.update');
    Route::get('/contact/get', [ContactController::class, 'getContact'])->name('contact.get');
    Route::delete('/admin/contact/feedback/{id}', [ContactController::class, 'deleteFeedback'])->name('admin.contact.feedback.delete');
    Route::post('/admin/contact/feedback/reply', [ContactController::class, 'replyToFeedback'])->name('admin.contact.feedback.reply');

    // Requirements Routes 
    Route::get('/admin/requirements', [RequirementController::class, 'index'])->name('admin.requirements');
    Route::post('/admin/requirements', [RequirementController::class, 'store'])->name('admin.requirements.store');
    Route::put('/admin/requirements/{requirement}', [RequirementController::class, 'update'])->name('admin.requirements.update');
    Route::delete('/admin/requirements/{requirement}', [RequirementController::class, 'destroy'])->name('admin.requirements.destroy');

    // Appointment Routes
    Route::get('/admin/appointment', [AppointmentController::class, 'showAppointments'])->name('admin.appointment');
    Route::put('/admin/appointments/{appointment}/status', [AppointmentController::class, 'updateStatus'])->name('admin.appointments.status');
    Route::delete('/admin/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('admin.appointments.destroy');
    Route::get('/admin/appointments/{id}/logs', [AppointmentController::class, 'getLogs'])->name('admin.appointments.logs');
    Route::get('/admin/appointments/logs', [AppointmentController::class, 'getAllLogs'])->name('admin.appointments.all-logs');
    
    // Approved Appointments Route
    Route::get('/admin/appointments/filter-approved', [AppointmentController::class, 'filterApproved'])->name('admin.appointments.filter-approved');
    
    // Email Tester Route
    Route::get('/admin/email-tester', [AppointmentController::class, 'showEmailTester'])->name('admin.email-tester');
    Route::post('/admin/email-tester/send', [AppointmentController::class, 'sendTestEmail'])->name('admin.email-tester.send');

    // Employee Approval Routes
    Route::post('/admin/accept-employee/{id}', [EmployeeApprovalController::class, 'acceptEmployee'])->name('admin.accept-employee');
    Route::post('/admin/reject-employee/{id}', [EmployeeApprovalController::class, 'rejectEmployee'])->name('admin.reject-employee');
    Route::delete('/admin/delete-employee/{id}', [EmployeeApprovalController::class, 'deleteEmployee'])->name('admin.delete-employee');

    // API Routes for User Management
    Route::get('/api/admin/pending-users', [EmployeeController::class, 'getPendingUsers'])->name('api.admin.pending-users');
    Route::get('/api/admin/user-activity', [EmployeeController::class, 'getUserActivity'])->name('api.admin.user-activity');
    Route::get('/api/admin/employee-activity', [EmployeeController::class, 'getEmployeeActivity'])->name('api.admin.employee-activity');

    // Residence Appointment Routes
    Route::post('/residence/appointment/check-existing', [AppointmentController::class, 'checkExistingAppointment'])->name('residence.appointment.check-existing');
});

// Public Routes
Route::get('/announcements', [AnnouncementController::class, 'getActiveAnnouncements'])->name('announcements.get');

// Public FAQ route
Route::get('/faqs', [FaqController::class, 'publicFaqs'])->name('faqs');

// Public Contact route 
Route::get('/contact-info', [ContactController::class, 'getContact'])->name('contact.get');

// Admin Registration Routes
Route::get('/admin/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminRegisterController::class, 'register']);

// Home route
Route::view('/', 'homepage')->name('home');
Route::view('/home', 'homepage')->name('home');
