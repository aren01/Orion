<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BooksForm;

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


Route::group(['middleware' => [
  'auth:sanctum',
  'verified'
  ]], function () {
    Route::get('/dashboard', function () {
      return view('dashboard');
    })->name('dashboard');

    Route::get('/Books', function () {
      return view('books');
    })->name('Books');

    Route::get('/AddBook', function () {
      return view('books_form');
    })->name('AddBook');

    Route::get('/Catagory', function () {
      return view('Catagory');
    })->name('Catagory');

    Route::get('/AddCatagory', function () {
      return view('catagory-form');
    })->name('AddCatagory');

    // Route::get(' AddBook', BooksForm::class)->name('AddBook');

    Route::get('/Students', function () {
      return view('students');
    })->name('Students');
  });
