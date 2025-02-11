<?php

use App\Helper\Helper;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\CategoryController; 
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\MetaDetailController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\Admin\setting\SeoController;
use App\Http\Controllers\Admin\setting\SocialController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubAdminController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NewsletterController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\PropertyController as FrontPropertyController;
use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\FavoriteController;
use App\Http\Controllers\User\PropertyController;
use App\Http\Controllers\User\UserController;
use App\Models\Package;
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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/home-loan', [HomeController::class, 'homeloan'])->name('homeloan');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/post', [HomeController::class, 'contactPost'])->name('contact.post');
Route::get('/page/{slug}', [HomeController::class, 'page'])->name('page');

Route::get('/properties', [FrontPropertyController::class, 'properties'])->name('properties');
Route::get('/property/{slug}', [FrontPropertyController::class, 'property'])->name('property');
Route::post('/property/enquiry/post', [FrontPropertyController::class, 'enquiryPost'])->name('property.enquiry');
Route::post('/bank/enquiry/post', [HomeController::class, 'bankPost'])->name('bank.enquiry');
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');

Route::post('/newsletter/post', [NewsletterController::class, 'postData'])->name('newsletter.post');
Route::post('/newsletter/mobile/post', [NewsletterController::class, 'postDataMobile'])->name('newsletter.mobile.post');
 
Route::post('/create-order', [PaymentController::class, 'createOrder'])->name('payment.create');
Route::post('/verify-payment', [PaymentController::class, 'handlePayment'])->name('payment.verify');
 
Route::middleware('guest')->group(function () {
    Route::any('/login', [UserAuthController::class, 'login'])->name('login');
    Route::any('/register', [UserAuthController::class, 'register'])->name('register');
    Route::any('/forgot/password', [UserAuthController::class, 'forgotPassword'])->name('forgot.password');
    Route::match(['get','post'], '/password-reset/{token}', [UserAuthController::class, 'passwordReset'])->name('password.reset');
    Route::get('/reset/success', [UserAuthController::class, 'passwordResetSuccess'])->name('password.reset-success'); 

    //Google login
    Route::get('auth/google', [UserAuthController::class, 'redirectToGoogle'])->name('login.google.redirect');
    Route::get('auth/google/callback', [UserAuthController::class, 'handleGoogleCallback'])->name('login.google.callback');

    //otp Login
    Route::post('/send-otp', [UserAuthController::class, 'sendOTP']);
    Route::post('/verify-otp', [UserAuthController::class, 'verifyOTP']);
});


Route::middleware(['auth.user'])->prefix('user')->group(function () {
// Route::group(['prefix' => 'user'], function () {
    Route::get('/logout', [UserAuthController::class, 'logout'])->name('user.logout');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::any('/profile/edit', [UserController::class, 'editProfile'])->name('user.profile.edit');
    Route::any('/change/password', [UserController::class, 'changePassword'])->name('user.change.password');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/my-package', [UserController::class, 'package'])->name('user.package');
    Route::get('/my-reviews', [UserController::class, 'reviews'])->name('user.reviews');

    Route::get('/property/favorite/add/{id}', [FavoriteController::class, 'add'])->name('user.favorite.add');
    Route::get('/property/favorite/toggle/{id}', [FavoriteController::class, 'toggle'])->name('user.favorite.toggle');
    Route::get('/property/favorites', [FavoriteController::class, 'list'])->name('user.favorites');
    Route::get('/property/favorite/delete/{favorite_id}', [FavoriteController::class, 'delete'])->name('user.favorite.delete');

    Route::get('/properties', [PropertyController::class, 'list'])->name('user.properties');
    Route::get('/property/add', [PropertyController::class, 'add'])->name('user.property.add');
    Route::get('/property/edit/{id}', [PropertyController::class, 'edit'])->name('user.property.edit');
    Route::post('/property/image/delete', [PropertyController::class, 'deleteImage'])->name('user.property.image.delete');
    Route::post('/property/post', [PropertyController::class, 'postData'])->name('user.property.post');
    Route::get('/property/sold/{id}', [PropertyController::class, 'changeStatusSold'])->name('user.property.sold');
    Route::get('/property/enquiries', [PropertyController::class, 'enquiries'])->name('user.property.enquiries');
    Route::get('/property/assign/{id}', [PropertyController::class, 'assignPackage'])->name('user.property.assign');

});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::any('/', [AuthController::class, 'login'])->name('admin.login');
        Route::get('/login', [AuthController::class, 'login']);
        Route::any('/forgot/password', [AuthController::class, 'forgotPassword'])->name('admin.forgot.password');
        Route::match(['get','post'], '/password-reset/{token}', [AuthController::class, 'passwordReset'])->name('admin.password.reset');
        Route::get('/reset/success', [AuthController::class, 'passwordResetSuccess'])->name('admin.password.reset-success');    
    }); 
     
    Route::group(['middleware' => ['admin.auth', 'check.level']], function () {
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

        Route::get('/banks', [BankController::class, 'list'])->name('admin.banks');
        Route::get('/bank', [BankController::class, 'add'])->name('admin.bank');
        Route::get('/bank/{id}', [BankController::class, 'edit'])->name('admin.bank.edit');
        Route::post('bank-post-data', [BankController::class, 'postData'])->name('admin.bank.post');
        Route::get('/bank/delete/{entity_id}', [BankController::class, 'delete'])->name('admin.bank.delete');
        Route::post('/bank/status/change', [BankController::class, 'changeStatus'])->name('admin.bank.status.change');
        Route::post('/bank/priority-change', [BankController::class, 'changePriority'])->name('admin.bank.priority.change');

        Route::get('/users', [AdminUserController::class, 'list'])->name('admin.users');
        Route::get('/user/detail/{id}', [AdminUserController::class, 'detail'])->name('admin.user');
        Route::get('/user/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
        Route::post('user-post-data', [AdminUserController::class, 'postData'])->name('admin.user.post');
        Route::post('/user/status/change', [AdminUserController::class, 'changeStatus'])->name('admin.user.status.change');

        Route::get('/properties', [AdminPropertyController::class, 'list'])->name('admin.properties');
        Route::get('/property/add/{user_id?}', [AdminPropertyController::class, 'add'])->name('admin.property.add');
        Route::get('/property/edit/{id}', [AdminPropertyController::class, 'edit'])->name('admin.property.edit');
        Route::post('property-post-data', [AdminPropertyController::class, 'postData'])->name('admin.property.post');
        Route::post('/property/image/delete', [AdminPropertyController::class, 'deleteImage'])->name('admin.property.image.delete');
        Route::post('/property/status/change', [AdminPropertyController::class, 'changeStatus'])->name('admin.property.status.change');
        
        Route::get('/packages', [PackageController::class, 'list'])->name('admin.packages');
        Route::get('/package/add', [PackageController::class, 'add'])->name('admin.package.add');
        Route::get('/package/edit/{id}', [PackageController::class, 'edit'])->name('admin.package.edit');
        Route::post('package-post-data', [PackageController::class, 'postData'])->name('admin.package.post');
        Route::get('/package/delete/{id}', [PackageController::class, 'delete'])->name('admin.package.delete');
        Route::post('/package/status/change', [PackageController::class, 'changeStatus'])->name('admin.package.status.change');
        Route::get('/package/orders', [PackageController::class, 'orders'])->name('admin.package.orders');
        Route::get('/package/order/delail/{id}', [PackageController::class, 'orderDetail'])->name('admin.package.order');

        Route::get('/contact-enquiries', [Dashboard::class, 'contactEnquiries'])->name('admin.contact-enquiries');
        Route::get('/property-enquiries', [Dashboard::class, 'propertyEnquiries'])->name('admin.property-enquiries');
        Route::get('/subscribers', [Dashboard::class, 'subscribers'])->name('admin.subscribers');

        // Route::get('/categories', [CategoryController::class, 'list'])->name('admin.categories');
        // Route::get('/category', [CategoryController::class, 'add'])->name('admin.category');
        // Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        // Route::post('category-post-data', [CategoryController::class, 'postData'])->name('admin.category.post');
        // Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
        // Route::post('/category/status/change', [CategoryController::class, 'changeStatus'])->name('admin.category.status.change');
 
        Route::get('pages', [PageController::class, 'list'])->name('admin.pages');
        Route::get('page', [PageController::class, 'add'])->name('admin.page');
        Route::get('page/{id}', [PageController::class, 'edit'])->name('admin.page.edit');
        Route::post('page-post-data', [PageController::class, 'postData'])->name('admin.page.post');
        Route::get('page-delete/{id}', [PageController::class, 'delete'])->name('admin.page.delete');

        Route::any('/meta/save', [MetaDetailController::class, 'metaSave'])->name('admin.meta.save');
        Route::get('/meta-details', [MetaDetailController::class, 'metaList'])->name('admin.meta.list');
        Route::any('/meta/update/{id?}', [MetaDetailController::class, 'metaUpdate'])->name('admin.meta.update');
         
        Route::match(['get','post'], 'settings', [SettingController::class, 'settings'])->name('admin.settings');
        Route::group( [ 'prefix' => 'settings' ], function(){
            Route::get('seo-list', [SeoController::class, 'list'])->name('admin.settings.seo.list');
            Route::get('seo', [SeoController::class, 'add'])->name('admin.settings.seo');
            Route::get('seo/{id}', [SeoController::class, 'edit'])->name('admin.settings.seo.edit');
            Route::post('seo-post-data', [SeoController::class, 'postData'])->name('admin.settings.seo.post');
            Route::get('seo-delete/{id}', [SeoController::class, 'delete'])->name('admin.settings.seo.delete');

            Route::match(['get','post'], 'social', [SocialController::class, 'social'])->name('admin.settings.social');
        });

        //Route::match(['get','post'], 'settings/social', [SocialController::class, 'social'])->name('admin.settings.social');        

    });
});

 