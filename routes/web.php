<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;

/* Route::get('/', function () {
    return view('layaout/app');
}); */

 Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('blog/list', function () {
    return view('blog.list');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::get('/blogs/create', function () {
//     return view('bolgs.create');
// });

Route::post('/send_mail', [MailController::class, 'sendEmail'])->name('sendemail');
Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/dashboard/blogs', [BlogController::class, 'store'])->name('insertData')->middleware('auth');
Route::get('/dashboard/blogs/create', [BlogController::class, 'createBlogForm'])->name('dashboard.blogs.blog-form')->middleware('auth');
Route::get('/dashboard/blogs/latest', [BlogController::class, 'showLatestBlog'])->name('dashboard.blogs.latest')->middleware('auth');

Route::get('/dashboard/blogs/list', [BlogController::class, 'listBlogs'])->name('dashboard.blogs.list')->middleware('auth');
//Route::get('/all', [BlogController::class, 'all'])->name('all');
Route::get('/all/{category?}', [BlogController::class, 'all'])->name('all');

Route::get('/dashboard/blogs/{blogId}/edit', [BlogController::class, 'editBlog'])->name('dashboard.blogs.edit');
//Route::put('dashboard/blogs/{blog}', [BlogController::class, 'updateBlog'])->name('dashboard.blogs.update')->middleware('auth');
Route::put('dashboard/blogs/{id}', [BlogController::class, 'update'])->name('dashboard.blogs.update')->middleware('auth');
Route::delete('dashboard/blogs/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog')->middleware('auth');





