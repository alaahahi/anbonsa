<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LocaleController;

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



Route::get('/lang/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    setcookie('lang',$locale, time() + (60 * 24 * 30), '/'); 
    return 'ok';
});


Route::get('/lang', function () {
    // $locale = app()->getLocale();
    $locale = session('locale');
    return $locale;
});

Route::get('link', function () {
    Artisan::call('storage:link');

    return "yes link";
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/', [PagesController::class, 'home'])->name('/');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/service-details', [PagesController::class, 'serviceDetails'])->name('service-details');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');

 

Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact-us');
Route::get('/product-details/{id}', [PagesController::class, 'productDetails'])->name('product-details');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');

Route::get('/blog-details/{id}', [PagesController::class, 'blogDetails'])->name('blog-details');


