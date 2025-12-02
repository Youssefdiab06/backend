<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


// 🌐 FRONTEND ROUTES
Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contactz', 'contactz')->name('contact');
Route::view('/awareness', 'awareness')->name('awareness');
Route::view('/health', 'health')->name('health');
Route::view('/healthcare', 'healthcare')->name('healthcare');
Route::view('/e-services', 'e-services')->name('e-services');
Route::view('/register', 'register')->name('register');

// 🌟 FORM ROUTES
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::post('/contactz', [ContactController::class, 'store'])->name('contact.store');

// 🔑 AUTH ROUTES
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 📝 REGISTER ROUTES
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


// -------------------------------------------------
// 🔐 SIMPLE ADMIN PASSWORD ACCESS (NO KERNEL)
// -------------------------------------------------

// 1️⃣ SHOW PASSWORD FORM
Route::get('/admin-access', function () {
    return view('admin-password');
})->name('admin.access');

// 2️⃣ CHECK PASSWORD
Route::post('/admin-access', function (Request $request) {

    $secret = "MEDICA123"; // <<< SET YOUR ADMIN PASSWORD HERE

    if ($request->password === $secret) {
        session(['admin_ok' => true]);
        return redirect('/admin');
    }

    return back()->withErrors(['password' => 'Incorrect password']);
})->name('admin.access.submit');

// 3️⃣ ADMIN PAGE (PROTECTED)
Route::get('/admin', function () {

    if (!session('admin_ok')) {
        return redirect()->route('admin.access');
    }

    return app(AdminController::class)->index();

})->name('admin.dashboard');


// -------------------------------------------------
// Doctor / Appointment Data Routes
// -------------------------------------------------

// Return all doctors (JSON)
Route::get('/doctors', function () {
    return response()->json(Doctor::all(['id', 'name']));
});

// Return available dates for a doctor
Route::get('/doctor/{id}/dates', function ($id) {
    $dates = DoctorSchedule::where('doctor_id', $id)
        ->pluck('date')
        ->unique()
        ->values();

    return response()->json($dates);
});

// Return available times for a doctor on a specific date
Route::get('/doctor/{id}/dates/{date}/times', function ($id, $date) {
    $times = DoctorSchedule::where('doctor_id', $id)
        ->where('date', $date)
        ->get(['id', 'start_time', 'end_time']);

    return response()->json($times);
});