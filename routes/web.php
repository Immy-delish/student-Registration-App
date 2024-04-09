<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HomeController;




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
/* Contact Routes*/
Route::get('/devschool/students', [ContactController::class, 'index']);
Route::post('/addcontact', [ContactController::class, 'add']);
Route::get('/delete/{id}', [ContactController::class, 'delete']);
Route::get('/edit/{id}', [ContactController::class, 'edit']);
Route::post('/edit/{id}', [ContactController::class, 'update']);

/* Images Routes*/

Route::get('ajaxImageUpload', 'App\Http\Controllers\AjaxImageUploadController@ajaxImageUpload');
Route::post('ajaxImageUpload', 'App\Http\Controllers\AjaxImageUploadController@ajaxImageUploadPost')->name('ajaxImageUpload');

Route::get('/', function() {
    return view('home');
 });

 Route::get('/devschool/courses', function() {
    return view('courses');
 });