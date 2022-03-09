<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\testcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------- ----------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});




Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('home');
    })
    ->name('dashboard');

Route::get('/index', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/sq', function () {
    return redirect('/ss');
});
Route::get('/test', [testcontroller::class, 'test']);


Route::post('/uploadtrans', [IndexController::class, 'uploadtrans']);

Route::get('/ss', [IndexController::class, 'getpost'])->name('ss');
// Route::get('/', [pagesController::class, 'getpost'])->name('transact.getpost');
// Route::middleware(['auth:sanctum', 'verified'])->get('/sq', function () {
//     return redirect('/delete');
// });
Route::POST('/delete', [IndexController::class, 'deletePost']);
route::resource('students',studentcontroller::class);
