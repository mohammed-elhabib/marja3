<?php

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


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/add', [App\Http\Controllers\PostController::class, 'add']);
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name("post-store");
Route::get('/posts',[App\Http\Controllers\PostController::class, 'list'])->name("post-list");
Route::get('/post/{post_id}/view', [App\Http\Controllers\PostController::class, 'view'])->name("post-view");

Route::post('/upload', function () {
    return true;
});

Route::get('image/upload','ImageUploadController@fileCreate');
Route::post('image/upload/store','ImageUploadController@fileStore');
Route::post('image/delete','ImageUploadController@fileDestroy');

Route::get('/attachment', [App\Http\Controllers\AttachmentController::class, 'add']);
Route::post('/attachment/store', [App\Http\Controllers\AttachmentController::class, 'store'])->name("attachment-store");
Route::get('/tag/list', [App\Http\Controllers\TagController::class, 'list']);
