<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ChannelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// To trash a student
// Route::get(
//     'students/trash/{id}',
//     [StudentController::class, 'trash']
// )->name('students.trash')->middleware(['auth', 'verified']);

// // Show all the trashed students
// Route::get(
//     'students/trashed/',
//     [StudentController::class, 'trashed']
// )->name('students.trashed');

// Route::get(
//     'students/restore/{id}',
//     [StudentController::class, 'trash']
// )->name('students.restore');

// Route::get(
//     'courses',
//     [CourseController::class, 'index']
// )->name('courses.index');

// Route::get(
//     'courses/{id}',
//     [CourseController::class, 'show']
// )->name('courses.show');


// Route::resource('students', StudentController::class)->middleware(['auth', 'verified']);


// Channel routes
// To trash a student
Route::get(
    'channels/trash/{id}',
    [ChannelController::class, 'trash']
)->name('channels.trash');


// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/channels/create', [ChannelController::class, 'create'])->name('channels.create');
    Route::post('/channels', [ChannelController::class, 'store'])->name('channels.store');
    Route::get('/channels/{channel}/edit', [ChannelController::class, 'edit'])->name('channels.edit');
    Route::put('/channels/{channel}', [ChannelController::class, 'update'])->name('channels.update');
    Route::delete('/channels/{channel}', [ChannelController::class, 'destroy'])->name('channels.destroy');
});


// Routes that don't require authentication
Route::get('/channels', [ChannelController::class, 'index'])->name('channels.index');
Route::get('/channels/{channel}', [ChannelController::class, 'show'])->name('channels.show');





Route::resource('channels', ChannelController::class);