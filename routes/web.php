<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PemilikAmbulanceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view("landing");
});

Route::get('/admin', function(){
    return view("admin");
});

Route::get('/user', function(){
    return view("user");
});


Route::get('/login', function(){
    return view("login");
});

Route::post('/login',[AuthController::class,"login"]);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/register', function(){
    return view("register");
});

Route::post('/register',[AuthController::class,"register"]);


// Routing untuk Ambulance
Route::resource('ambulance', PemilikAmbulanceController::class)->middleware('auth');
Route::resource('pemilik_ambulance', PemilikAmbulanceController::class)->middleware('auth');
// routes/web.php

Route::get('/pemilik-ambulance', [PemilikAmbulanceController::class, 'index'])->name('pemilik_ambulance.index');

// Route untuk menampilkan form tambah Pemilik Ambulance
Route::get('/pemilik-ambulance/create', [PemilikAmbulanceController::class, 'create'])->name('pemilik_ambulance.create');

// Route untuk menyimpan data Pemilik Ambulance
Route::post('/pemilik-ambulance', [PemilikAmbulanceController::class, 'store'])->name('pemilik_ambulance.store');

// Route untuk menampilkan form edit Pemilik Ambulance
Route::get('/pemilik-ambulance/{pemilikAmbulance}/edit', [PemilikAmbulanceController::class, 'edit'])->name('pemilik_ambulance.edit');

// Route untuk memperbarui data Pemilik Ambulance
Route::put('/pemilik-ambulance/{pemilikAmbulance}', [PemilikAmbulanceController::class, 'update'])->name('pemilik_ambulance.update');

// Route untuk menghapus data Pemilik Ambulance
Route::delete('/pemilik-ambulance/{pemilikAmbulance}', [PemilikAmbulanceController::class, 'destroy'])->name('pemilik_ambulance.destroy');

