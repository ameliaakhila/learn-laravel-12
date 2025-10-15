<?php

use App\Models\Blogs;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/**
 * ! Halaman Beranda
 */
Route::get('/', function () {
    return view('components.page.home', [
        'title' => 'Learn With Laravel 12'
    ]);
});

/**
 * ! Halaman Blog Terbaru (limit 6)
 */
Route::get('/blogs', function () {
    $latestBlogs = Blogs::with('auth')->take(6)->get();

    return view('components.page.blogs', [
        'title' => 'Blogs',
        'blogs' => $latestBlogs
    ]);
});

/**
 * ! Halaman Semua Blog
 */
Route::get('/blogs/all', function () {
    $allBlogs = Blogs::with('auth')->get();

    return view('components.page.blog-all', [
        'title' => 'All Blogs',
        'blogs' => $allBlogs
    ]);
});

/**
 * ! Halaman Detail Blog berdasarkan slug
 *
 * @param Blogs $blog
 */
Route::get('/blogs/{blog:slug}', function (Blogs $blog) {
    // Memuat relasi author untuk blog
    $blog->load('auth');

    return view('components.blog', [
        'title' => 'Blog',
        'blog' => $blog
    ]);
});

/**
 * ! Halaman Blog berdasarkan Author
 *
 * @param User $user
 */
Route::get('/blogs/auth/{user:username}', function (User $user) {
    $user->load('blogs.auth'); // Memuat semua blog beserta author

    return view('components.blog', [
        'title' => $user->blogs->count() . ' Article by ' . $user->name,
        'user' => $user->blogs
    ]);
});

/**
 * ! Halaman Blog berdasarkan Kategori
 *
 * @param string $category
 */
Route::get('/blogs/category/{category}', function ($category) {
    $blogsByCategory = Blogs::with('auth')
        ->where('category', $category)
        ->get();

    return view('components.blog', [
        'title' => $blogsByCategory->count() . ' Level ' . ucfirst($category),
        'categorys' => $blogsByCategory
    ]);
});

/**
 * ! Halaman Tentang
 */
Route::get('/about', function () {
    return view('components.page.about', [
        'title' => 'About'
    ]);
});

/**
 * ! Halaman Kontak
 */
Route::get('/contact', function () {
    return view('components.page.contact', [
        'title' => 'Contact'
    ]);
});
