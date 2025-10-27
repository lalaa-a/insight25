<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/partners', function () {
    return Inertia::render('Partners');
});

Route::get('/last-year', \App\Http\Controllers\LastYear::class);
Route::get('/feed', function() {
    return Inertia::render('Feed');
});

Route::get('/timeline', function () {
    return Inertia::render('Timeline');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/details/edit', [DetailController::class, 'edit'])
        ->name('details.edit');

    Route::post('/details', [DetailController::class, 'update'])
        ->name('details.update');


    Route::get('/cv/show', [\App\Http\Controllers\CvController::class, 'show_auth'])
        ->name('cv.show');

});

Route::get('/cvs/{user_id}', [\App\Http\Controllers\CvController::class, 'show'])
    ->name('cvs.show');

Route::get("/448wfhw87ehf8es", function () {
    // get user with their details
    $users = \App\Models\User::with('detail')->get();

//    dd($usersWithDetails);
    return Inertia::render('Table', [
        'users' => $users
    ]);
});

Route::get("/1148wfhdjdhf8es", function () {
    $users = \App\Models\User::whereHas('detail', function ($query) {
        $query->whereNotNull('coordinator');
    })->with('detail:coordinator,user_id')->get();

//    dd($users);

    return Inertia::render('Coordinator', [
        'users' => $users
    ]);
});

Route::get('/emails/register', function () {
    return view('emails.register');
});

Route::get('/dashboard', function () {
    return redirect()
        ->route('details.edit')
        ->with('status', session('status'));
//    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
