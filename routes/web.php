<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiwaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiwa', function () {
    return ('halo mahasiwa');
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1}', function ($param1) {
    return 'Nim saya: '.$param1;
});

Route::get('/mahasiwa', function () {
    return 'Halo Mahasiwa';
})->name('mahasiwa.show');

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/mahasiwa/{param1}',[MahasiwaController::class,'show']);
