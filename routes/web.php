<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\Posts\CreatePostController;
use App\Http\Controllers\Users\Posts\ShowPostController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function() {
        Route::post('create', [CreatePostController::class, 'create'])->name('create');
        Route::get('/', [ShowPostController::class, 'list'])->name('index');
    });

});

require __DIR__.'/auth.php';
