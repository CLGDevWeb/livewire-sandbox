<?php

use App\Livewire\HelloCode;
use App\Livewire\HelloTodo;
use App\Livewire\PostList;
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

Route::get('/', HelloTodo::class)->name('todos');
Route::get('/code', HelloCode::class)->name('code');
Route::get('/posts', PostList::class)->name('posts.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
