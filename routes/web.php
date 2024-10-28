<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Beranda;
use App\Livewire\User;
use App\Livewire\Laporan;
use App\Livewire\Produk;
use App\Livewire\Transaksi;


Route::get('/', function () {
    return view('welcome');
});

Auth::Routes();

Route::get('/home', beranda::class)->middleware(['auth'])->name('home');
Route::get('/user', user::class)->middleware(['auth'])->name('user');
Route::get('/laporan', laporan::class)->middleware(['auth'])->name('laporan');
Route::get('/produk', produk::class)->middleware(['auth'])->name('produk');
Route::get('/transaksi', transaksi::class)->middleware(['auth'])->name('transaksi');
