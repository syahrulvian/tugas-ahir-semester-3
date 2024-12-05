<?php

use App\Http\Controllers\homecontrol;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
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
Route::get('home',[homecontrol::class,'home'])->name('home');
Route::get('one',[homecontrol::class,'one'])->name('one');
Route::get('about',[homecontrol::class,'about'])->name('about');
Route::get('hobi',[homecontrol::class,'hobi'])->name('hobi');
Route::get('contact',[homecontrol::class,'contact'])->name('contact');
//Route::get('create',[homecontrol::class,'contact'])->name('velcome');
Route::get('index',[homecontrol::class,'contact'])->name('index');


//Route::post('/', function (App\Http\Requests\PostRequest $request) {

   // return back()->with('success','Data Added Successfully.');
    //});

   // Route::resource('posts', PostController::class);
    // Route::get('create', [PostController::class ,'create'])->name('create');

    
     Route::resource('postpesan', PesanController::class);
     Route::get('create', [PesanController::class ,'create'])->name('create');
     Route::get('/postpesan/{id}/edit', [PesanController::class, 'edit'])->name('pesan.edit');

    Route::get('/', function () {
        return view('home');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';
    