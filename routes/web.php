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

Route::get('/', function () {
    return view('homepage');
});

// USER ROUTES
Route::view('/home', 'homepage')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/contact', [ContactController::class, 'showUserContact'])->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/feedback', [ContactController::class, 'sendFeedback'])->name('contact.sendFeedback');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginHandler']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register/step1', [RegisterController::class, 'showStep1'])->name('register');
Route::post('/register/step1', [RegisterController::class, 'postStep1']);

Route::get('/register/step2', [RegisterController::class, 'showStep2'])->name('register.step2');
Route::post('/register/step2', [RegisterController::class, 'postStep2']);

Route::post('/forget-password', [AuthController::class, 'forgetPassword'])->name('forget.password');

Route::view('/forget-password/confirmation', 'temporary-views.password-reset-confirmation')->name('password-reset-confirmation');

// Residence Routes
Route::get('/residence-homepage', [ResidenceController::class, 'showResidenceHomepage'])->middleware('auth')->name('residence-homepage');
Route::get('/residence-appointment', [ResidenceController::class, 'showResidenceAppointment'])->middleware('auth')->name('residence-appointment');
Route::get('/residence-requirements', [ResidenceController::class, 'showResidenceRequirements'])->middleware('auth')->name('residence-requirements');
Route::get('/residence-faqs', [ResidenceController::class, 'showResidenceFaqs'])->middleware('auth')->name('residence-faqs');
Route::get('/residence-about-us', [ResidenceController::class, 'showResidenceAboutUs'])->middleware('auth')->name('residence-about-us');
Route::get('/residence-contact-us', [ResidenceController::class, 'showResidenceContactUs'])->middleware('auth')->name('residence-contact-us');


Route::get('/residence-appointment', [ResidenceController::class, 'showResidenceAppointment'])->middleware('auth')->name('residence-appointment');
Route::get('/residence-requirements', [ResidenceController::class, 'showResidenceRequirements'])->middleware('auth')->name('residence-requirements');

Route::get('/residence/profile', [ProfileController::class, 'getUser'])->middleware('auth')->name('residence.profile');
Route::put('/residence/profile/update', [ProfileController::class, 'updateProfile'])->middleware('auth')->name('residence.profile.update');
Route::post('/residence/profile/remove-image', [ProfileController::class, 'removeProfileImage'])->middleware('auth')->name('residence.profile.remove-image');

Route::post('/residence/appointment/store', [AppointmentController::class, 'storeAppointment'])->middleware('auth')->name('residence.appointment.store');

// ADMIN ROUTES
Route::get('/admin/login', [AuthController::class, 'showEmployeeLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'employeeLoginHandler'])->name('admin.login.handler');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::post('/admin/password', [AuthController::class, 'updateAdminPassword'])->name('admin.password.update');

Route::get('/admin/appointment', [EmployeeController::class, 'showAdminAppointment'])->middleware('auth')->name('admin.appointment');
Route::get('/admin/about', [EmployeeController::class, 'showAdminAbout'])->middleware('auth')->name('admin.about');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/homepage', [EmployeeController::class, 'showAdminHomepage'])->name('admin.homepage');
    Route::put('/admin/announcements/{announcement}', [AnnouncementController::class, 'update'])->name('admin.announcements.update');
    Route::post('/admin/announcements/{announcement}/image', [AnnouncementController::class, 'updateImage'])->name('admin.announcements.updateImage');
    Route::post('/admin/announcements', [AnnouncementController::class, 'store'])->name('admin.announcements.store');
    
    // FAQ Routes
    Route::get('/admin/faqs', [FaqController::class, 'index'])->name('admin.faqs');
    Route::post('/admin/faqs', [FaqController::class, 'store'])->name('admin.faqs.store');
    Route::put('/admin/faqs/{faq}', [FaqController::class, 'update'])->name('admin.faqs.update');
    Route::delete('/admin/faqs/{faq}', [FaqController::class, 'destroy'])->name('admin.faqs.destroy');
    Route::post('/admin/faqs/reorder', [FaqController::class, 'reorder'])->name('admin.faqs.reorder');

    // Contact Routes
    Route::get('/admin/contact', [ContactController::class, 'showAdminContact'])->name('admin.contact');
    Route::post('/admin/contact/update', [ContactController::class, 'updateContact'])->name('contact.update');
    Route::get('/contact/get', [ContactController::class, 'getContact'])->name('contact.get');

    // User Acceptance Routes 
    Route::post('/admin/accept-user/{user}', [EmployeeController::class, 'acceptUser'])->middleware('auth')->name('admin.accept-user');
    Route::post('/admin/reject-user/{user}', [EmployeeController::class, 'rejectUser'])->middleware('auth')->name('admin.reject-user');

    // Requirements Routes 
    Route::get('/admin/requirements', [EmployeeController::class, 'showAdminRequirements'])->middleware('auth')->name('admin.requirements');

});

// Public Routes
Route::get('/announcements', [AnnouncementController::class, 'getActiveAnnouncements'])->name('announcements.get');

// Public FAQ route
Route::get('/faqs', [FaqController::class, 'publicFaqs'])->name('faqs');

// Public Contact route 
Route::get('/contact-info', [ContactController::class, 'getContact'])->name('contact.get');

