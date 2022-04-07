<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

// *posts routes
Route::get("/posts", [PostController::class, "index"])->name("posts");

Route::get("/posts/create", [PostController::class, "create"])->name("create_post");
Route::post("/posts/create", [PostController::class, "store"]);

Route::get("/posts/edit/{id}", [PostController::class, "edit"])->name("edit_post");
Route::post("/posts/edit", [PostController::class, "update"]);

Route::post("/posts/delete", [PostController::class, "destroy"]);
