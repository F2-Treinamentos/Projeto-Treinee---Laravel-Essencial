<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;

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

Route::get('/ola-mundo-novo', [HelloWorldController::class, 'olaMundo'])->name('ola-mundo');

Route::get('/minha-tabela', function () {
    return view('tabela');
});

Route::get('/ola/{abc}', function ($xyz) {
    return view('ola', [
        'nome' => $xyz,
    ]);
});

Route::get('/ola2/{abc?}', function ($xyz = null) {
    return view('ola', [
        'nome' => $xyz,
    ]);
});

Route::get('/ola3/{abc}/{zebra?}', function ($xyz, $lala = null) {
    return view('ola', [
        'nome' => $xyz,
        'sobrenome' => $lala,
    ]);
});
