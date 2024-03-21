<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::resource('hospitals', HospitalController::class)->names('hospitals');
Route::get('get-kabupaten', [HospitalController::class,'getKabupaten'])->name('hospital.kabupaten');
Route::get('get-kecamatan', [HospitalController::class,'getKecamatan'])->name('hospital.kecamatan');
