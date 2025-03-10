<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PruebaController;
use App\Models\Post;
use Illuminate\Support\Carbon;
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

Route::get('/', [HomeController::class, 'index']);

// Route::get("/posts",[PostController::class,"index"])->name("posts.index");
// Route::get("/posts/create",[PostController::class,"create"])->name("posts.create");
// Route::get("/posts/{post}",[PostController::class,"show"])->name("posts.show");
// Route::get("/posts/{id}/edit",[PostController::class,"edit"])->name("posts.edit");
// Route::post("/posts",[PostController::class,"store"])->name("posts.store");
// Route::put("/posts/{id}",[PostController::class,"update"])->name("posts.update");
// Route::delete("/posts/{id}",[PostController::class,"destroy"])->name("posts.destroy");

// Route::apiResource("posts",PostController::class);

Route::
resource("posts",PostController::class)
// ->parameters(["articulos"=>"post"])
// ->except(["create","edit"])
// ->names(   "posts")
;
