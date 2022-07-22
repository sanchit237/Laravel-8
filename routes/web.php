<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ApiController;

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

Route::get('/demo', function () {
    return view('Demo');
});

//Route with a only view
Route::view('/about','about');
Route::view('/customerview','customerview');

Route::get('/user', [DemoController::class, 'display'])->middleware('third');
Route::post('formdata', [FormController::class, 'form']);

Route::view('/form','formview')->middleware('third');
// Route::view('customerview','customerview');


Route::get('/', function () {
    return view('welcome');
})->middleware('DemoMiddleware');


Route::get('data', [DataController::class, 'index']);
Route::get('customer', [CustomerController::class, 'index']);
Route::get('api', [ApiController::class, 'index']);
Route::get('delete/{id}', [CustomerController::class, 'delete']);
Route::get('edit/{id}', [CustomerController::class, 'edit']);
Route::post('update', [CustomerController::class, 'update']);
Route::get('operations', [CustomerController::class, 'operations']);
