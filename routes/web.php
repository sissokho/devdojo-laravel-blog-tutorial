<?php

use App\Http\Livewire\Post;
use App\Http\Livewire\PostCreate;
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

Route::view('/', 'home');

Route::get('post/create', PostCreate::class);

Route::get('post/{slug}', Post::class);
