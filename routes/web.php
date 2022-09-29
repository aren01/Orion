<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EditBooks;
use App\Http\Livewire\EditCatagory;
use App\Http\Livewire\EditAuthors;
use App\Http\Livewire\EditInventory;
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
      return view('catagory');
    })->name('Catagory');

    Route::get('/AddCatagory', function () {
      return view('catagory-form');
    })->name('AddCatagory');

    Route::get('/Author', function () {
      return view('author');
    })->name('Author');

    Route::get('/AddAuthor', function () {
      return view('author-form');
    })->name('AddAuthor');

    Route::get('/EditBooks/{id}', [EditBooks::class, 'render']);
    Route::post('/EditBooks/{id}/update', [EditBooks::class, 'update']);

    Route::get('/EditAuthors/{id}', [EditAuthors::class, 'render']);
    Route::post('/EditAuthors/{id}/update', [EditAuthors::class, 'update']);

    Route::get('/EditCatagory/{id}', [EditCatagory::class, 'render']);
    Route::post('/EditCatagory/{id}/update', [EditCatagory::class, 'update']);


    Route::get('/Students', function () {
      return view('students');
    })->name('Students');

    Route::get('/Inventory', function () {
      return view('ManageInventory');
    })->name('Inventory');

    Route::get('/AddInventory', function () {
      return view('AddInventory');
    })->name('AddInventory');

    Route::get('/EditInventory/{id}', [EditInventory::class, 'render']);
    Route::post('/EditInventory/{id}/update', [EditInventory::class, 'update']);

    Route::get('/Lendings', function () {
      return view('ManageLends');
    })->name('Lendings');

    Route::get('/AddLend', function () {
      return view('AddLend');
    })->name('AddLend');

    Route::get('/BookHistory', function () {
      return view('book_history');
    })->name('BookHistory');

    Route::get('/BookRequest', function () {
      return view('book_request');
    })->name('BookRequest');


  });
