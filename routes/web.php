<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Role ;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsOwner;
use App\Http\Middleware\IsTouriste;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('Auth.register', [ 'roles' => Role::all()]);
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/admin', [AdminController::class, 'index'])->middleware([IsAdmin::class])->name('admin.dashboard');
    Route::get('/owner', [OwnerController::class, 'index'])->middleware([IsOwner::class])->name('owner.dashboard');
    Route::get('/touriste', [TouristeController::class, 'index'])->middleware([IsTouriste::class])->name('touriste.dashboard');
    Route::post('/annonce/store', [AnnonceController::class, 'store'])->middleware([IsOwner::class])->name("annonce.store");
    Route::put('/annonce/{id}', [AnnonceController::class, 'update'])->middleware([IsOwner::class])->name("annonce.update");
    Route::get('/annonce/{id}/edit', [AnnonceController::class, 'show'])->middleware([IsOwner::class])->name("annonce.show");
    Route::delete('/annonce/{id}', [AnnonceController::class, 'destroy'])->middleware([IsOwner::class])->name("annonce.delete");

    Route::get('/favorites', [FavoriteController::class, 'index'])->middleware([IsTouriste::class])->name('favorites');





});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
