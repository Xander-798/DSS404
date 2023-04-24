<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', function () {
    return "Hola mundo";
});
Route::get('/hola/en', function () {
    return "Hello World";
});
Route::get('/hola/{nombre}', function ($nombre) {
    return "Hola $nombre";
});



Route::controller(EditorialesController::class)->group(function(){
    Route::get('/editoriales', [EditorialesController::class, 'index']);
    Route::get('/editoriales/create', [EditorialesController::class, 'create']);
    Route::get('/editoriales/editar/{id}', [EditorialesController::class, 'edit']);
    Route::get('/editoriales/borrar/{id}', [EditorialesController::class, 'delete']);
});
/*
Auth::routes();
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
