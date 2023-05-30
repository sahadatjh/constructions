<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/clear',function ()
{
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('view:cache');
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    return "Cache, view, route clear successfully!";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services-single', [HomeController::class, 'servicesSingle'])->name('services.singel');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/projects-single', [HomeController::class, 'projectsSingle'])->name('projects.single');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.us');
Route::get('/cost', [HomeController::class, 'cost'])->name('cost');
Route::get('/cost/products-single', [HomeController::class, 'productSingle'])->name('product.single');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-single', [HomeController::class, 'blogSingle'])->name('blog.single');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

require __DIR__.'/auth.php';
