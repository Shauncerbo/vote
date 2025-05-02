<?php

use App\Models\Department;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\userTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ElectionController;

Route::resource('departments', DepartmentController::class);

    Route::view('/', 'homepage')->name('homepage');





    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/signup', [AuthController::class, 'showSignup'])->name('show.signup');



    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout.subit');


    Route::middleware('auth')->group(function () {
  
        Route::view('/election-admin', 'admin.election-admin')->name('election-admin');

        // Department Admin Routes
        Route::delete('/departments/{department_id}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
        Route::post('/create', [DepartmentController::class, 'store'])->name('departments.store');
        Route::get('/show/{department_id}', [DepartmentController::class, 'show'])->name('departments.show');
        Route::get('/index', [DepartmentController::class, 'index'])->name('departments.index');
        Route::get('/edit/{department_id}', [DepartmentController::class, 'edit'])->name('departments.edit');
        Route::put('/put/{department_id}', [DepartmentController::class, 'update'])->name('departments.update');

        //UserType Routes

        Route::delete('/userTypes/{userType_id}', [UserTypeController::class, 'destroy'])->name('userTypes.destroy');
        Route::post('/userTypes', [UserTypeController::class, 'store'])->name('userTypes.store');
        Route::get('/userTypes/{userType_id}', [UserTypeController::class, 'show'])->name('userTypes.show');
        Route::get('/userTypes', [UserTypeController::class, 'index'])->name('userTypes.index');
        Route::get('/userTypes/edit/{userType_id}', [UserTypeController::class, 'edit'])->name('userTypes.edit');
        Route::put('/userTypes/{userType_id}', [UserTypeController::class, 'update'])->name('userTypes.update');

        // User Routes
        Route::get('/manage-users', [UserController::class, 'index'])->name('view-users');
        Route::post('/create-users', [UserController::class, 'store'])->name('create-user');


        // election controller
        Route::get('/elections', [ElectionController::class, 'index'])->name('view-election');
        });

    // Department Admin Routes
    Route::view('/voters', 'department-admin.voters')->name('voters-DeptAdmin');
    Route::view('/candidates', 'department-admin.candidates')->name('candidates-DeptAdmin');
    Route::view('/DeptAdmin-elections', 'department-admin.elections')->name('elections-DeptAdmin');
    Route::view('/DeptAdmin-ManageAcc', 'department-admin.manageAccount')->name('manageAcc-DeptAdmin');

    // Voter Routes
    Route::view('/voter-election', 'voter.election')->name('election');
    Route::view('/voter-candidates', 'voter.manageAcc')->name('manageAcc-voter');

    //not final 
    Route::view('/users', 'admin.users')->name('manage-users');


    








