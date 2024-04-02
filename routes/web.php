<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ViewBlogController;
use App\Http\Controllers\MyBlogsController;

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('signup', [RegisterController::class, 'showRegistrationForm'])->name('signup');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('createBlog', [BlogController::class, 'createBlog'])->name('createBlog');

Route::get('blog', [ViewBlogController::class, 'blog'])->name('blog');

Route::get('myBlogs', [MyBlogsController::class, 'myBlogs'])->name('myBlogs');

