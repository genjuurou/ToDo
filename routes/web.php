<?php

use App\Enums\Scheduled;
use App\Http\Livewire\Todos;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {
    Route::redirect('/', '/'.Scheduled::TODAY->value)->name('home');
    
    Route::get('/{scheduled}', Todos\Index::class)->name('todos.index');
});
