<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

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

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('service', [PageController::class, 'service'])->name('service');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('ai-rpa', [PageController::class, 'ai_rpa'])->name('ai-rpa');
Route::get('smm', [PageController::class, 'smm'])->name('smm');
Route::get('seo', [PageController::class, 'seo'])->name('seo');
Route::get('ppc', [PageController::class, 'ppc'])->name('ppc');
Route::post('enquiry', [PageController::class, 'enquiry'])->name('enquiry');
Route::post('contactform', [PageController::class, 'contactform'])->name('contactform');
Route::get('thankyou', [PageController::class, 'thankyou'])->name('thankyou');

Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::get('admin/register', [LoginController::class, 'register'])->name('register');
Route::get('admin/signin', [LoginController::class, 'signin'])->name('signin');
Route::post('/signup', [LoginController::class, 'signup'])->name('signup');

// Employee routes
Route::middleware(['role:employee', 'auth'])->group(function () {
    Route::view('employee/dashboard-employee', 'employee/dash-employee');
});
// Admin Routes
Route::middleware(['role:admin', 'auth'])->group(function () {
    Route::view('admin/dashboard-admin', 'admin/dash-admin');
    Route::get('enquirydata', [AdminController::class, 'enquiry'])->name('enquirydetails');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/sitemap.xml', function () {
    SitemapGenerator::create(config('app.url'))
       ->writeToFile(public_path('sitemap.xml'));

    return response()->view('sitemap.index')->header('Content-Type', 'application/xml');
});
