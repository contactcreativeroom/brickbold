<?php

use App\Helper\Helper;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\CategoryController; 
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\MetaDetailController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SubAdminController;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PropertyController as FrontPropertyController;
use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\FavoriteController;
use App\Http\Controllers\User\PropertyController;
use App\Http\Controllers\User\UserController;
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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/trash', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:cache');		
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('config:clear');    
    echo"Cache Cleard Successfully!";
}); 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/properties', [FrontPropertyController::class, 'properties'])->name('properties');
Route::get('/property/{id}', [FrontPropertyController::class, 'property'])->name('property');

Route::post('/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/register', [UserAuthController::class, 'register'])->name('register');
Route::any('/forgot/password', [UserAuthController::class, 'forgotPassword'])->name('forgot.password');
Route::match(['get','post'], '/password-reset/{token}', [UserAuthController::class, 'passwordReset'])->name('password.reset');
Route::get('/reset/success', [UserAuthController::class, 'passwordResetSuccess'])->name('password.reset-success'); 
Route::group(['prefix' => 'user'], function () {
    Route::get('/logout', [UserAuthController::class, 'logout'])->name('user.logout');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::any('/profile/edit', [UserController::class, 'editProfile'])->name('user.profile.edit');
    Route::any('/change/password', [UserController::class, 'changePassword'])->name('user.change.password');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/my-package', [UserController::class, 'package'])->name('user.package');
    Route::get('/property/favorite/add/{id}', [FavoriteController::class, 'add'])->name('user.favorite.add');
    Route::get('/property/favorites', [UserController::class, 'favorites'])->name('user.favorites');
    Route::get('/my-reviews', [UserController::class, 'reviews'])->name('user.reviews');

    Route::get('/properties', [PropertyController::class, 'list'])->name('user.properties');
    Route::get('/property/add', [PropertyController::class, 'add'])->name('user.property.add');
    Route::get('/property/{id}', [PropertyController::class, 'edit'])->name('user.property.edit');
    Route::post('/property/image/delete', [PropertyController::class, 'deleteImage'])->name('user.property.image.delete');
    Route::post('/property/post', [PropertyController::class, 'postData'])->name('user.property.post');
    Route::get('/property/sold/{id}', [PropertyController::class, 'changeStatusSold'])->name('user.property.sold');
    Route::get('/property/enquery', [PropertyController::class, 'enquery'])->name('user.property.enquery');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::any('/', [AuthController::class, 'login'])->name('admin.login');
        Route::get('/login', [AuthController::class, 'login']);
        Route::any('/forgot/password', [AuthController::class, 'forgotPassword'])->name('admin.forgot.password');
        Route::match(['get','post'], '/password-reset/{token}', [AuthController::class, 'passwordReset'])->name('admin.password.reset');
        Route::get('/reset/success', [AuthController::class, 'passwordResetSuccess'])->name('admin.password.reset-success');    
    }); 
     
    Route::group(['middleware' => ['admin.auth']], function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::any('/profile/edit', [AdminController::class, 'editProfile'])->name('admin.profile.edit');
        Route::any('/change/password', [AdminController::class, 'changePassword'])->name('admin.change.password');

        Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/sub-admins', [SubAdminController::class, 'list'])->name('admin.subadmins');
        Route::get('/sub-admin', [SubAdminController::class, 'add'])->name('admin.subadmin');
        Route::get('/sub-admin/{id}', [SubAdminController::class, 'edit'])->name('admin.subadmin.edit');
        Route::post('/sub-admin-post-data', [SubAdminController::class, 'postData'])->name('admin.subadmin.post');
        Route::get('/sub-admin/delete/{entity_id}', [SubAdminController::class, 'delete'])->name('admin.subadmin.delete');
        Route::post('/sub-admin/status/change', [SubAdminController::class, 'changeStatus'])->name('admin.subadmin.status.change');

        Route::get('/banners', [BannersController::class, 'list'])->name('admin.banners');
        Route::get('/banner', [BannersController::class, 'add'])->name('admin.banner');
        Route::get('/banner/{id}', [BannersController::class, 'edit'])->name('admin.banner.edit');
        Route::post('banner-post-data', [BannersController::class, 'postData'])->name('admin.banner.post');
        Route::get('/banner/delete/{entity_id}', [BannersController::class, 'delete'])->name('admin.banner.delete');
        Route::post('/banner/status/change', [BannersController::class, 'changeStatus'])->name('admin.banner.status.change');
        Route::post('/banner/priority-change', [BannersController::class, 'changePriority'])->name('admin.banner.priority.change');
        
        Route::get('/categories', [CategoryController::class, 'list'])->name('admin.categories');
        Route::get('/category', [CategoryController::class, 'add'])->name('admin.category');
        Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('category-post-data', [CategoryController::class, 'postData'])->name('admin.category.post');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
        Route::post('/category/status/change', [CategoryController::class, 'changeStatus'])->name('admin.category.status.change');
 
        Route::get('pages', [PageController::class, 'list'])->name('admin.pages');
        Route::get('page', [PageController::class, 'add'])->name('admin.page');
        Route::get('page/{id}', [PageController::class, 'edit'])->name('admin.page.edit');
        Route::post('page-post-data', [PageController::class, 'postData'])->name('admin.page.post');
        Route::get('page-delete/{id}', [PageController::class, 'delete'])->name('admin.page.delete');

        Route::any('/meta/save', [MetaDetailController::class, 'metaSave'])->name('admin.meta.save');
        Route::get('/meta-details', [MetaDetailController::class, 'metaList'])->name('admin.meta.list');
        Route::any('/meta/update/{id?}', [MetaDetailController::class, 'metaUpdate'])->name('admin.meta.update');
         
    });
});

 