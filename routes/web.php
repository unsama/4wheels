<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ProfileControllerAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\XMLSitemapController;
use Illuminate\Support\Facades\Artisan;

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
//Basic Routes
Route::get('/', [PostsController::class,'homepage']);
Route::get('/services', function () {
    return view('services');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

// Work
Route::get('/work', function () {
    return view('work.allworks');
});
Route::get('/work/landing', function () {
    return view('work.landing');
});


// Services - Digital Marketing
Route::get('/services/digital-marketing-services', function () {
    return view('services.digital-marketing');
});
Route::get('/services/digital-marketing-services/affiliate-marketing-services', function () {
    return view('services.digital-marketing.affiliate-marketing');
});
Route::get('/services/digital-marketing-services/content-creation-service', function () {
    return view('services.digital-marketing.content-creation');
});
Route::get('/services/digital-marketing-services/email-marketing-services', function () {
    return view('services.digital-marketing.email-marketing');
});
Route::get('/services/digital-marketing-services/search-engine-marketing-services', function () {
    return view('services.digital-marketing.search-engine-marketing');
});
Route::get('/services/digital-marketing-services/search-engine-optimization-services', function () {
    return view('services.digital-marketing.search-engine-optimization');
});
Route::get('/services/digital-marketing-services/social-media-marketing', function () {
    return view('services.digital-marketing.social-media-marketing');
});

//Services - Graphics & Design
Route::get('/services/graphic-design-services', function () {
    return view('services.graphics-and-design');
});
Route::get('/services/graphic-design-services/logo-design-and-brand-identity', function () {
    return view('services.graphics-and-design.logo-and-brand-identity');
});
Route::get('/services/graphic-design-services/web-mobile-design', function () {
    return view('services.graphics-and-design.web-and-mobile-design');
});
Route::get('/services/graphic-design-services/ui-ux-design-services', function () {
    return view('services.graphics-and-design.ui-ux');
});

//Services - Programming & Tech
Route::get('/services/programming-and-tech', function () {
    return view('services.programming-and-tech');
});
Route::get('/services/programming-and-tech/ecommerce-website-development', function () {
    return view('services.programming-and-tech.e-commerce-development');
});
Route::get('/services/programming-and-tech/mobile-app-development', function () {
    return view('services.programming-and-tech.mobile-apps');
});
Route::get('/services/programming-and-tech/shopify-development', function () {
    return view('services.programming-and-tech.shopify');
});
Route::get('/services/programming-and-tech/web-programming-services', function () {
    return view('services.programming-and-tech.web-programming');
});
Route::get('/services/programming-and-tech/cms-website-development-services', function () {
    return view('services.programming-and-tech.website-builders-and-cms');
});
Route::get('/services/programming-and-tech/wix-website-development-services', function () {
    return view('services.programming-and-tech.wix');
});
Route::get('/services/programming-and-tech/wordpress-development-services', function () {
    return view('services.programming-and-tech.wordpress');
});

//Services - Social Media Marketing
Route::get('/services/social-media-marketing', function () {
    return view('services.social-media-marketing');
});
Route::get('/services/social-media-marketing/article-writing-services', function () {
    return view('services.social-media-marketing.article-and-blog-posts');
});
Route::get('/services/social-media-marketing/proofreading-and-editing', function () {
    return view('services.social-media-marketing.proofreading-and-editing');
});
Route::get('/services/social-media-marketing/cover-letter-writing-services', function () {
    return view('services.social-media-marketing.resume-and-cover-letters');
});

// Dynamic Routes
Route::get('/blogs', [PostsController::class, 'getAll']);
Route::get('/blogs/{slug}', [PostsController::class, 'show']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);

Route::post('/contact', [ContactController::class, 'submit']);
Route::get('/sitemap.xml', [XMLSitemapController::class, 'index']);
Route::get('/storage-link', function (){
    Artisan::call('storage:link');
    echo 'ok';
});

//Admin Routes


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', function() { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::post('/admin/dashboard', [PostsController::class, 'store']);
    // Route::post('/admin/add-post', [PostsController::class, 'store']);
    Route::get('/admin/profile', [ProfileControllerAdmin::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileControllerAdmin::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileControllerAdmin::class, 'destroy'])->name('admin.profile.destroy');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// require __DIR__.'/auth.php';
require __DIR__.'/adminauth.php';
