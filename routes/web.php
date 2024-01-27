<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

Route::get('/', [PublicController::class,'home'])->name('home');

Route::middleware('verified')->group(function(){

    Route::get('/work-with-us', [PublicController::class, 'workWithUs'])->name('work.with.us');

    Route::post('/user/send-role-request', [PublicController::class, 'sendRoleRequest'])->name('user.role.request');

});

Route::middleware(['writer', 'verified'])->group(function(){

    Route::get('/articles/create', [ArticleController::class,'create'])->name('articles.create');

    route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');

});

Route::get('/articles/{article}/show', [ArticleController::class,'show'])->name('articles.show');

Route::get('/articles/{category}/index', [ArticleController::class,'articlesForCategory'])->name('articles.category');

Route::get('/articles/{user}/created', [ArticleController::class,'articlesForUser'])->name('articles.user');

Route::get('/articles/search', [PublicController::class, 'searchArticle'])->name('search.article');

Route::middleware(['admin', 'verified'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/{user}/set-revisor', [AdminController::class, 'makeUserRevisor'])->name('admin.makeUserRevisor');

    Route::get('/admin/{user}/set-admin', [AdminController::class, 'makeUserAdmin'])->name('admin.makeUserAdmin');

    Route::get('/admin/{user}/set-writer', [AdminController::class, 'makeUserWriter'])->name('admin.makeUserWriter');

    Route::post('/tag/{tag}/update', [AdminController::class, 'editTag'])->name('tag.edit');

    Route::delete('/tag/{tag}/delete', [AdminController::class, 'deleteTag'])->name('tag.delete');

    Route::post('/tag/store', [AdminController::class, 'storeTag'])->name('tag.storage');

    Route::post('/category/{category}/update', [AdminController::class, 'editCategory'])->name('category.edit');

    Route::delete('/category/{category}/delate', [AdminController::class, 'deleteCategory'])->name('category.delete');

    Route::post('/category/store', [AdminController::class, 'storeCategory'])->name('category.storage');

});

Route::middleware(['revisor', 'verified'])->group(function(){

    Route::get('/revisor/dashboard', [RevisorController::class, 'revisorDashboard'])->name('revisor.dashboard');

    Route::get('/revisor/article/{article}/detail', [RevisorController::class, 'articleDetail'])->name('revisor.detail');

    Route::get('/revisor/article/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.accept');

    Route::get('/revisor/article/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.reject');

});
