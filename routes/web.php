<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


    Route::view('/', 'homepage')->name('homepage');





    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/signup', [AuthController::class, 'showSignup'])->name('show.signup');



    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout.subit');


    Route::middleware('auth')->group(function () {
        Route::get('/index', [AuthController::class, 'showindex'])->name('show.AdminIndex');
        Route::view('/election-admin', 'admin.election-admin')->name('election-admin');
    });

    // Department Admin Routes
    Route::view('/voters', 'department-admin.voters')->name('voters-DeptAdmin');
    Route::view('/candidates', 'department-admin.candidates')->name('candidates-DeptAdmin');
    Route::view('/DeptAdmin-elections', 'department-admin.elections')->name('elections-DeptAdmin');
    Route::view('/DeptAdmin-ManageAcc', 'department-admin.manageAccount')->name('manageAcc-DeptAdmin');

    // Voter Routes
    Route::view('/voter-election', 'voter.election')->name('election');
    Route::view('/voter-candidates', 'voter.manageAcc')->name('manageAcc-voter');