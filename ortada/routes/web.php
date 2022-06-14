<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/', [MainController::class, 'about']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/events', [MainController::class, 'event'])->name('events');

Route::get('/home', [MainController::class, 'home']);

Route::delete('/userdestroy/{id}', [UserController::class, 'userdestroy'])->name('userdestroy');

Route::delete('/eventdestroy/{id}', [MainController::class, 'eventdestroy'])->name('eventdestroy');

Route::get('/signin', [MainController::class, 'signinindex'])->name('user.signin')->middleware('guest');;

Route::post('/signup', [UserController::class, 'postSignup'])->middleware('guest');

Route::get('/signup', [MainController::class, 'signupindex'])->name('user.signup')->middleware('guest');

Route::get('/logout', [UserController::class, 'getLogout'])->name('logout')->middleware('auth');

Route::get('/profile', [UserController::class, 'getProfile'])->name('user.profile')->middleware('auth');

Route::post('/signin', [UserController::class, 'postSignin'])->middleware('guest');


Route::middleware('admin')->group(function (){
    Route::get('/adminview', [MainController::class, 'adminView'])->name('admin-view');

    Route::get('/adminviewevent', [MainController::class, 'eventview'])->name('event-view');

    Route::get('/adminaddevent', [MainController::class, 'addnewevent'])->name('addevent');

    Route::post('/insert-event', [MainController::class, 'insert']);
});

