<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LandingpageController;


// Grup route untuk produk
Route::group(['prefix' => 'produk'], function () {
    // Route untuk menampilkan detail produk
    Route::get('/{id_barang}', [ProductController::class, 'show'])->name('product.show');
    
    // Route untuk melakukan pembelian produk
    Route::get('/beli/{id_barang}', [LandingpageController::class, 'beli'])->name('beli.product');

    // Perbaikan pada definisi rute ini
    Route::post('landingpage/store', [LandingpageController::class, 'store'])->name('landingpage.store');
});

Route::group(['prefix' => 'landingpage'], function () {
    Route::get('', [LandingpageController::class, 'index'])->name('landingpage');
    Route::get('beli', [LandingpageController::class, 'beli'])->name('landingpage.beli');
    Route::post('store', [LandingpageController::class, 'store'])->name('landingpage.store');
});

// Route default untuk LandingpageController
Route::get('/', [LandingpageController::class, 'index']);

// Route default untuk LandingpageController
Route::get('/', [LandingpageController::class, 'index']);


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id_barang}', 'show')->name('products.show');
        Route::get('edit/{id_barang}', 'edit')->name('products.edit');
        Route::put('edit/{id_barang}', 'update')->name('products.update');
        Route::delete('destroy/{id_barang}', 'destroy')->name('products.destroy');
        
        
    });

    Route::controller(UsersController::class)->prefix('user')->group(function () {
        Route::get('', 'index')->name('user');
        Route::get('create', 'create')->name('user.create');
        Route::post('store', 'store')->name('user.store');
        Route::get('show/{id}', 'show')->name('user.show');
        Route::get('edit/{id}', 'edit')->name('user.edit');
        Route::put('edit/{id}', 'update')->name('user.update');
        Route::delete('destroy/{id}', 'destroy')->name('user.destroy');
    });

    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
        Route::get('', 'index')->name('kategori');
        Route::get('create', 'create')->name('kategori.create');
        Route::post('store', 'store')->name('kategori.store');
        Route::get('show/{id}', 'show')->name('kategori.show');
        Route::get('edit/{id}', 'edit')->name('kategori.edit');
        Route::put('edit/{id}', 'update')->name('kategori.update');
        Route::delete('destroy/{id}', 'destroy')->name('kategori.destroy');
    });

    Route::controller(PelangganController::class)->prefix('pelanggan')->group(function () {
        Route::get('', 'index')->name('pelanggan');
        Route::get('create', 'create')->name('pelanggan.create');
        Route::post('store', 'store')->name('pelanggan.store');
        Route::get('show/{id_pelanggan}', 'show')->name('pelanggan.show');
        Route::get('edit/{id_pelanggan}', 'edit')->name('pelanggan.edit');
        Route::put('edit/{id_pelanggan}', 'update')->name('pelanggan.update');
        Route::delete('destroy/{id_pelanggan}', 'destroy')->name('pelanggan.destroy');
    });

    Route::controller(TransaksiController::class)->prefix('transaksi')->group(function () {
        Route::get('', 'index')->name('transaksi');
        Route::get('create', 'create')->name('transaksi.create');
        Route::post('store', 'store')->name('transaksi.store');
        Route::get('show/{id}', 'show')->name('transaksi.show');
        Route::get('edit/{id}', 'edit')->name('transaksi.edit');
        Route::put('edit/{id}', 'update')->name('transaksi.update');
        Route::delete('/transaksi/destroy/{id}', 'TransaksiController@destroy')->name('transaksi.destroy');
        

    });


    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});