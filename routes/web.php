<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ServicosController;
use App\Models\User;

Route::get('/', function () {
    return view('site.home');
});

Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();

    $user = User::where('email', $user_google->email)
        ->orWhere('google_id', $user_google->id)
        ->first();

    if ($user) {
        if ($user->email !== $user_google->email) {
            $user->email = $user_google->email;
        }
        if ($user->google_id !== $user_google->id) {
            $user->google_id = $user_google->id;
        }
        $user->save();
    } else {
        $user = User::create([
            'name' => $user_google->name,
            'email' => $user_google->email,
            'google_id' => $user_google->id,
        ]);
    }

    Auth::login($user);

    return redirect('/dashboard');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/servicos',[ServicosController::class,'index'])->name('servicos');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
