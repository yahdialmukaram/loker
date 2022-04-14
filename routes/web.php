<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    //     return view('welcome');
    // });



    // login
    Route::get('/', [LoginController::class,'login']);

    Route::middleware('guest')->group(function(){

        Route::post('actionLogin', [LoginController::class,'actionLogin'])->name('actionLogin');

        Route::post('actionRegistrasi', [LoginController::class, 'actionRegistrasi'])->name('actionRegistrasi');

        Route::get('registrasi', function () {
            return view('admin.registrasi');
        });
    });



    // user login sistem


// admin login sistem
Route::middleware(['adminMiddleware'])->group(function()
{
    Route::get('index', [AdminController::class, 'index'])->name('index');

    Route::get('dataUser', [AdminController::class, 'dataUser'])->name('dataUser');

    Route::get('dataPt', [AdminController::class, 'dataPt'])->name('dataPt');

    Route::delete('deleteUser/{id}', [AdminController::class, 'destroy'])->name('deleteUser');

    Route::get('actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout');

});

Route::get('index-user', [UserController::class, 'index'])->name('index.user');









// Route::get('dataPt', [AdminController::class,'index'])->name('index');
