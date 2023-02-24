<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
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

Route::get('/', [ProjectController::class, 'home']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/about', [ProjectController::class, 'about']);
Route::get('/projects/{project:slug}', [ProjectController::class, 'show']);
Route::get('/categories/{category:slug}', [ProjectController::class, 'listByCategory']);
Route::get('/projects/tags/{tag:slug}', [ProjectController::class, 'listByTag']);

Route::get('/createCategory', [CategoryController::class, 'create']);
Route::post('/createCategory', [CategoryController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/projects', [AdminController::class, 'index']);
    //Route::get('/admin/projects/{project:slug}', [AdminController::class, 'show']);

    //projects
    Route::get('/admin/projects/create', [ProjectController::class, 'create']);
    Route::post('/admin/projects/create', [ProjectController::class, 'store']);
    Route::get('/admin/projects/{project:slug}/edit', [ProjectController::class, 'edit']);
    Route::patch('/admin/projects/{project:slug}/edit', [ProjectController::class, 'update']);
    Route::delete('/admin/projects/{project:slug}/delete', [ProjectController::class, 'destroy']);
    
    //categories
    Route::get('/admin/category/create', [CategoryController::class, 'create']);
    Route::post('/admin/category/create', [CategoryController::class, 'store']);
    Route::get('/admin/category/{category:slug}/edit', [CategoryController::class, 'edit']);
    Route::patch('/admin/category/{category:slug}/edit', [CategoryController::class, 'update']);
    Route::delete('/admin/category/{category:slug}/delete', [CategoryController::class, 'destroy']);
    
    //tags
    Route::get('/admin/tag/create', [TagController::class, 'create']);
    Route::post('/admin/tag/create', [TagController::class, 'store']);
    Route::get('/admin/tag/{tag:slug}/edit', [TagController::class, 'edit']);
    Route::patch('/admin/tag/{tag:slug}/edit', [TagController::class, 'update']);
    Route::delete('/admin/tag/{tag:slug}/delete', [TagController::class, 'destroy']);
    
    //users
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);
    Route::get('/admin/user/{user:id}/edit', [RegisterUserController::class, 'edit']);
    Route::patch('/admin/user/{user:id}/edit', [RegisterUserController::class, 'update']);
    Route::delete('/admin/user/{user:id}/delete', [RegisterUserController::class, 'destroy']);
});

Route::get('/api/projects', [ProjectController::class, 'getProjectsJSON']);
Route::get('/api/categories', [CategoryController::class, 'getCategoriesJSON']);
Route::get('/api/tags', [TagController::class, 'getTagsJSON']);

Route::fallback(function() {

    // Set a flash message
    session()->flash('error','Requested page not found. Home you go.');

    // Redirect to /
    return redirect('/');
});