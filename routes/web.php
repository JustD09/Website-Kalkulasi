<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\PromoController;
use App\Models\Merchant;
use App\Models\Promo;
use App\Models\User;

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
    return view('auth.login');
});

// Rute untuk sistem Login dan Register
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Autentikasi setelah login
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        $dataPromo = Merchant::all();
        
        $totalPromo = Merchant::sum('promo');
        $totalRating = Merchant::sum('rating');
        $totalMerchant = Merchant::sum('nama_merchant');
        // // dd($totalPenumpangUmum, $totalPenumpangLRT, $totalPenumpang);
        $userCount = User::count();
        // $penumpangUmumCount = Penumpang::count('penumpang_umum');
        // $penumpangLRTCount = Penumpang::count('penumpang_lrt');
        // $totalPenumpangCount = Penumpang::count('jumlah_penumpang');
        // , compact('category', 'totalCategory', 'jumlahCategory', 'userCount', 'productCount', 'dataHasil', 'clusterCount')
        return view('dashboard', compact('dataPromo', 'totalPromo', 'totalRating', 'totalMerchant', 'userCount'));
    })->name('dashboard');
});

// CRUD table Merchant
    Route::controller(MerchantController::class)->prefix('merchant')->group(function () {
        Route::get('', 'index')->name('merchant');
        Route::get('create', 'create')->name('merchant.create');
        Route::post('store', 'store')->name('merchant.store');
        Route::get('show/{id}', 'show')->name('merchant.show');
        Route::get('edit/{id}', 'edit')->name('merchant.edit');
        Route::put('edit/{id}', 'update')->name('merchant.update');
        Route::delete('destroy/{id}', 'destroy')->name('merchant.destroy');
    });

// CRUD table Merchant
    Route::controller(PromoController::class)->prefix('promo')->group(function () {
        Route::get('', 'index')->name('promo');
    });