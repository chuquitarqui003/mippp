<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\CrudAceptation;
use App\Http\Livewire\CrudArticle;
use App\Http\Livewire\CrudCalendar;
use App\Http\Livewire\CrudCategory;
use App\Http\Livewire\CrudContract;
use App\Http\Livewire\CrudHistory;
use App\Http\Livewire\CrudIndustry;
use App\Http\Livewire\CrudMatery;
use App\Http\Livewire\CrudPlan;
use App\Http\Livewire\CrudPost;
use App\Http\Livewire\CrudPresentation;
use App\Http\Livewire\PostLivewire;
use Illuminate\Support\Facades\Route;

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
})->name('index');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    Route::get('/materies',CrudMatery::class)->name('materies');

    Route::get('/article',CrudArticle::class)->name('articles');

    Route::get('/industries',CrudIndustry::class)->name('industries');

    Route::get('/presentations',CrudPresentation::class)->name('presentations');
    Route::get('/aceptations',CrudAceptation::class)->name('aceptations');
    Route::get('/contracts',CrudContract::class)->name('contracts');

    Route::get('/plans',CrudPlan::class)->name('plans');
    Route::get('/calendars',CrudCalendar::class)->name('calendars');


});
