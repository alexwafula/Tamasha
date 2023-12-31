<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\CheckController;

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



Route::get('/ticket-cart/{event}', 'EventController@showTicketCart')->name('ticket-cart');
Route::post('/cart/add', 'CartController@addItem')->name('cart.add');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [EventController::class, 'dashboard'])->name('dashboard');


//Route::get('/check', [CheckController::class, 'checkout'])->name('checkout');
//Route::post('/check/{event}', [EventController::class, 'check'])->name('check');


Route::get('/admin', function () {
    return view('adminDashboard');
})->middleware(['auth', 'verified'])->name('adminDashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
      
    
});

 

Route::middleware('auth')->group(function () {

Route::get('/users',[UserController::class, 'index'])->name('Admin.users.index');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('Admin.users.edit');
Route::post('/users/{id}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/ticket-cart/{event}', [EventController::class, 'showTicketCart'])->name('ticket-cart');
Route::post('/cart/add', [CartController::class, 'addItem'])->name('cart.add');

});
/*
Route::middleware('auth')->name('Admin.')->group(function () {

    Route::post('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit');
    Route::get('/events',[EventController::class, 'index'])->name('events.index');

});*/



// Routes for managing events
Route::prefix('Admin')->name('Admin.')->group(function () {
    Route::get('/events',[EventController::class, 'index'])->name('events.index');
    Route::get('/events/show', [EventController::class, 'show'])->name('events.events');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events/', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
});




require __DIR__.'/auth.php';

