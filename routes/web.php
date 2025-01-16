<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendlyController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CourtBookingController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


// Main page route
Route::get('/', function () {
    return view('mainpage');
})->name('mainpage');


// Friendly resource routes
Route::resource('friendly', FriendlyController::class);

// Optional: Custom route for 'add-friendly' page (if needed)
Route::get('/add-friendly', [FriendlyController::class, 'create'])->name('friendly.create');

// Membership resource routes
Route::resource('membership', MemberController::class);

// Route for individual member deletion
//Route::delete('/members/{member}', [MemberController::class, 'destroy'])->name('members.destroy');

Route::get('/membership/{membership}/edit', [MemberController::class, 'edit'])->name('membership.edit');

// Define the route with a name
Route::get('/bookings', [CourtBookingController::class, 'index'])->name('index-booking.index');


// Court booking routes
Route::resource('court_bookings', CourtBookingController::class);
Route::get('/bookings', [CourtBookingController::class, 'index'])->name('court_bookings.index');
Route::get('/index-booking', [CourtBookingController::class, 'index'])->name('index-booking.index');

// Display the inquiry dashboard
Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');

// Store new inquiries
Route::post('/inquiries', [InquiryController::class, 'store'])->name('inquiries.store');

// Delete an inquiry
Route::delete('/inquiries/{id}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');

// Route to display the form page
Route::get('/inquiries/create', [InquiryController::class, 'create'])->name('inquiries.create');

// Route to handle form submission
Route::post('/inquiries', [InquiryController::class, 'store'])->name('inquiries.store');

Route::get('/contact-us', [InquiryController::class, 'create'])->name('contact-us');

Route::get('/inquiries/{id}/reply', [InquiryController::class, 'reply'])->name('inquiries.reply');
Route::post('/inquiries/{id}/send-reply', [InquiryController::class, 'sendReply'])->name('inquiries.send-reply');

Route::get('/payment', function () {
    return view('payment');
})->name('payment.index');

// Route for membership record payment
Route::get('/paymentmemberrecord', [PaymentController::class, 'showMembershipRecord'])->name('payment.membershipRecord');

// Route for booking record payment
Route::get('/paymentbookrecord', [PaymentController::class, 'showBookingRecord'])->name('payment.bookingRecord');

Route::get('/membership/records', [MemberController::class, 'index'])->name('membership.records');
Route::get('/friendly/records', [FriendlyController::class, 'index'])->name('friendly.records');
Route::get('/booking-court/records', [CourtBookingController::class, 'index'])->name('booking-court.records');
Route::get('/payment/records', [PaymentController::class, 'index'])->name('payment.records');
Route::get('/inquiry/records', [InquiryController::class, 'index'])->name('inquiry.records');

