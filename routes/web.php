<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConcessionController;
use App\Http\Controllers\MineController;
<<<<<<< HEAD
use App\Http\Controllers\UserController;

=======
use App\Http\Controllers\User\CreateUser;
use App\Http\Controllers\User\ShowUser;
>>>>>>> 08551db47446c6a6ea9b84a555583b57257dab06

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

Route::get('/', [HomeController::class, "home"])->name('home');

Route::get('/concession/show/{id}', [ConcessionController::class, "index"]);

<<<<<<< HEAD
Route::get('/mine/{id}', [MineController::class, 'index']);

Route::get('users/create', [UserController::class, 'create'])->name('users.create');

Route::post('users/store', [UserController::class, 'store'])->name('users.store');
=======
Route::get('/concessions', [ConcessionController::class, 'showall']);

Route::get('/mine/{id}', [MineController::class, 'index']);

Route::get('/concession/create', [ConcessionController::class, 'showForm'])->name('concession.create');

Route::post('/concession/create', [ConcessionController::class, 'createForm']);

Route::get('/user/create', [CreateUser::class, 'createUserForm'])->name('user.create.form');

Route::get('/user/show/all', [ShowUser::class, 'showAllUsers'])->name('user.show.all');

Route::post('/user/sendform', [CreateUser::class, 'createUser'])->name('user.create');
>>>>>>> 08551db47446c6a6ea9b84a555583b57257dab06
