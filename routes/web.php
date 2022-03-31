<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RecycleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// website route
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/privacy/policy', [WebsiteController::class, 'privacy']);
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::get('/product', [WebsiteController::class, 'product']);
Route::get('/product/details/{slug}', [WebsiteController::class, 'product_details']);
Route::post('/contact/send', [WebsiteController::class, 'contact_insert']);
// admin route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Recycle route
Route::get('/dashboard/recycle', [RecycleController::class, 'index']);
Route::get('/dashboard/recycle/user', [RecycleController::class, 'user']);
Route::get('/dashboard/recycle/banner', [RecycleController::class, 'banner']);
Route::get('/dashboard/recycle/contactusr', [RecycleController::class, 'contactus']);
Route::get('/dashboard/recycle/news', [RecycleController::class, 'news']);
Route::get('/dashboard/recycle/privacy/policy', [RecycleController::class, 'privacy']);
Route::get('/dashboard/recycle/product', [RecycleController::class, 'product']);

// Banner route
  Route::get('dashboard/banner', [BannerController::class, 'index']);
  Route::get('dashboard/banner/add', [BannerController::class, 'add']);
  Route::get('dashboard/banner/view/{slug}', [BannerController::class, 'view']);
  Route::get('dashboard/banner/edit/{slug}', [BannerController::class, 'edit']);
  Route::post('dashboard/banner/submit', [BannerController::class, 'insert']);
  Route::post('dashboard/banner/update', [BannerController::class, 'update']);
  Route::post('dashboard/banner/softdelete', [BannerController::class, 'softdelete']);
  Route::post('dashboard/banner/publish', [BannerController::class, 'publish']);
  Route::post('dashboard/banner/unpublish', [BannerController::class, 'unpublish']);
  Route::post('dashboard/banner/restore', [BannerController::class, 'restore']);
  Route::post('dashboard/banner/delete', [BannerController::class, 'delete']);


// Product route
  Route::get('dashboard/product', [ProductController::class, 'index']);
  Route::get('dashboard/product/add', [ProductController::class, 'add']);
  Route::get('dashboard/product/view/{slug}', [ProductController::class, 'view']);
  Route::get('dashboard/product/edit/{slug}', [ProductController::class, 'edit']);
  Route::post('dashboard/product/submit', [ProductController::class, 'insert']);
  Route::post('dashboard/product/update', [ProductController::class, 'update']);
  Route::post('dashboard/product/softdelete', [ProductController::class, 'softdelete']);
  Route::post('dashboard/product/publish', [ProductController::class, 'publish']);
  Route::post('dashboard/product/unpublish', [ProductController::class, 'unpublish']);
  Route::post('dashboard/product/restore', [ProductController::class, 'restore']);
  Route::post('dashboard/product/delete', [ProductController::class, 'delete']);


// news route
  Route::get('dashboard/news', [NewsController::class, 'index']);
  Route::get('dashboard/news/add', [NewsController::class, 'add']);
  Route::get('dashboard/news/view/{slug}', [NewsController::class, 'view']);
  Route::get('dashboard/news/edit/{slug}', [NewsController::class, 'edit']);
  Route::post('dashboard/news/submit', [NewsController::class, 'insert']);
  Route::post('dashboard/news/update', [NewsController::class, 'update']);
  Route::post('dashboard/news/softdelete', [NewsController::class, 'softdelete']);
  Route::post('dashboard/news/publish', [NewsController::class, 'publish']);
  Route::post('dashboard/news/unpublish', [NewsController::class, 'unpublish']);
  Route::post('dashboard/news/restore', [NewsController::class, 'restore']);
  Route::post('dashboard/news/delete', [NewsController::class, 'delete']);


// Content route
  Route::get('dashboard/content', [ContentController::class, 'index']);
  Route::get('dashboard/content/edit/{id}', [ContentController::class, 'edit']);
  Route::post('dashboard/content/update', [ContentController::class, 'update']);

// About route
  Route::get('dashboard/about', [AboutController::class, 'edit']);
  Route::post('dashboard/about/update', [AboutController::class, 'update']);


// manage route
  Route::get('/dashboard/manage', [ManageController::class, 'index']);
  Route::get('dashboard/manage/basic', [ManageController::class, 'basic']);
  Route::get('dashboard/manage/social/media', [ManageController::class, 'social_media']);
  Route::get('dashboard/manage/contact', [ManageController::class, 'contact']);
  Route::post('dashboard/manage/basic/update', [ManageController::class, 'update_basic']);
  Route::post('dashboard/manage/social/media/update', [ManageController::class, 'update_social_media']);
  Route::post('dashboard/manage/contact/update', [ManageController::class, 'update_contact']);

// privacy policy route
  Route::get('/dashboard/privacy/policy', [PrivacyPolicyController::class, 'index']);
  Route::get('dashboard/privacy/policy/add', [PrivacyPolicyController::class, 'add']);
  Route::get('dashboard/privacy/policy/view/{slug}', [PrivacyPolicyController::class, 'view']);
  Route::get('dashboard/privacy/policy/edit/{slug}', [PrivacyPolicyController::class, 'edit']);
  Route::post('dashboard/privacy/policy/submit', [PrivacyPolicyController::class, 'insert']);
  Route::post('dashboard/privacy/policy/update', [PrivacyPolicyController::class, 'update']);
  Route::post('dashboard/privacy/policy/softdelete', [PrivacyPolicyController::class, 'softdelete']);
  Route::post('dashboard/privacy/policy/publish', [PrivacyPolicyController::class, 'publish']);
  Route::post('dashboard/privacy/policy/unpublish', [PrivacyPolicyController::class, 'unpublish']);
  Route::post('dashboard/privacy/policy/restore', [PrivacyPolicyController::class, 'restore']);
  Route::post('dashboard/privacy/policy/delete', [PrivacyPolicyController::class, 'delete']);

// contact message route
  Route::get('/dashboard/contact/us', [ContactUsController::class, 'index']);
  Route::get('dashboard/contact/us/view/{id}', [ContactUsController::class, 'view']);
  Route::post('/dashboard/contact/us/softdelete', [ContactUsController::class, 'softdelete']);
  Route::post('/dashboard/contact/us/restore', [ContactUsController::class, 'restore']);
  Route::post('/dashboard/contact/us/delete', [ContactUsController::class, 'delete']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
