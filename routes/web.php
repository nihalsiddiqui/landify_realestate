<?php

use App\Http\Controllers\admin\Auth\LoginController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\tagController;
use App\Http\Controllers\admin\userController;
use App\Http\Controllers\admin\Auth\RegisterController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyRoleController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\FFCategoryController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTypeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TownController;
use App\Http\Controllers\user\aboutController;
use App\Http\Controllers\user\contactController;
use App\Http\Controllers\user\homeController;
use App\Http\Controllers\user\PageController;
use App\Http\Controllers\user\postController as FrontendPostController;
use App\Http\Controllers\admin\postController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\user\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});



//  ROUTES
//  for main web page

Route::group(['namespace' => 'user'], function () {
    //Route Of mian web page using homeController
    Route::get('/', [homeController::class, 'index'])->name('frontend.home');
    Route::get('/properties', [homeController::class, 'properties'])->name('properties');
//    Route::post('/Add/Listing', [ListingController::class, 'create'])->name('add.listing');
    Route::get('/properties/sale', [homeController::class, 'properties_sale'])->name('properties.for.sale');
    Route::get('/properties/rent', [homeController::class, 'properties_rent'])->name('properties.for.rent');
    Route::get('properties/{generic?}', [homeController::class, 'property'])->name('property.details');
    Route::get('/search/suggestions', [homeController::class, 'searchSuggestions'])->name('search.suggestion');
    Route::get('/search', [homeController::class, 'search'])->name('home.search');
    //    Route::get('listing/search',[homeController::class,'searchResult'])->name('search.result');
    //    Route::get('listing/search', function (){
    //        return view('npls.searchResult');
    //    });
    //page routes
    Route::get('/listing/{slug}', [homeController::class, 'listing'])->name('listing.details');
//    Route::post('/book/showing', [PageController::class, 'BookShowing'])->name('book.showing.store');
    Route::get('/aboutUs', [PageController::class, 'aboutUS'])->name('about.us');
    Route::get('/agents', [PageController::class, 'agent'])->name('agent');
    Route::get('/agent/detail/{id}', [PageController::class, 'agentDetail'])->name('agent.detail');
    Route::get('/agent/contact', [PageController::class, 'agentContact'])->name('agent.contact');
    Route::get('/apply/agent', [PageController::class, 'agentApply'])->name('applynow');
    Route::get('/blogs', [PageController::class, 'blog'])->name('blog');
    Route::get('/why/npls', [PageController::class, 'why_npls'])->name('why_npls');
    Route::get('/single-blog/{id}', [PageController::class, 'singleBlog'])->name('single-blog');
    Route::get('/pre-qualified/', [PageController::class, 'pre_qualified'])->name('pre_qualified');
    Route::post('/pre/qualified/mail', [PageController::class, 'preQualified'])->name('pre.Qualified');
    Route::post('/book/showing/', [App\Http\Controllers\user\PageController::class, 'BookShowing'])->name('book.store');
//    Route::get('/email/notification', [App\Http\Controllers\user\PageController::class, 'email_page']);


    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/privacy/policy', [homeController::class, 'privacy'])->name('privacy.policy');
    Route::get('/find/property', [PageController::class, 'findProperty'])->name('find.property');
    Route::get('listing/search', function () {
        return view('npls.searchResult');
    });
    //Route Of main web post page  using postController
    Route::get('post/{post?}', [FrontendPostController::class, 'index'])->name('sample-post');
    Route::get('post/category/{category}', [homeController::class, 'category'])->name('category');

    Route::get('post/tag/{tag}', [homeController::class, 'tag'])->name('tag');

    //Route Of main web about page  using aboutController
    Route::get('/aboutUs', [PageController::class, 'aboutUs'])->name('about.us');

    //Route Of main web contact page  using contactController
    Route::get('contact', [contactController::class, 'index'])->name('contact');
    Route::post('/submited', [contactController::class, 'contactsubmitmail'])->name('contact.form');
    Route::post('/accepted', [contactController::class, 'userContacttoAgent'])->name('contact.user');

    Route::post('/requestAccept', [contactController::class, 'contactagent'])->name('contact.agent');


    Route::get('faq', [\App\Http\Controllers\user\FaqController::class, 'index'])->name('faq');
});

//user-panel routes
Route::middleware(['auth', 'verified'])->group(function () {
    //Routing of profile in profileController
    Route::get('/user/profile', [\App\Http\Controllers\user\ProfileController::class, 'index'])->name('user.profile');
    //Routing of update profile in profileController
    Route::put('/user/profile/update/password', [\App\Http\Controllers\user\ProfileController::class, 'updatePassword'])->name('user.profile.password.update');
    Route::put('/user/profile/update', [\App\Http\Controllers\user\ProfileController::class, 'update'])->name('user.profile.update');
    Route::get('/add/listing', [App\Http\Controllers\user\ListingController::class, 'addListingUser'])->name('add.listing.user');


    //dashboard
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

    Route::prefix('/user/listing')->name('user.listing.')->group(function () {
        Route::get("/city-change/{id}", [App\Http\Controllers\user\ListingController::class, 'onChangeCity']);
        Route::get('/create', [App\Http\Controllers\user\ListingController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\user\ListingController::class, 'store'])->name('store');
        Route::get('/index', [App\Http\Controllers\user\ListingController::class, 'index'])->name('index');
        Route::get('/lists', [App\Http\Controllers\user\ListingController::class, 'allShow'])->name('list');
        Route::get('/edit{listing}', [App\Http\Controllers\user\ListingController::class, 'edit'])->name('edit');
        Route::put('/update{listing}', [App\Http\Controllers\user\ListingController::class, 'update'])->name('update');
        Route::delete('/delete{listing}', [App\Http\Controllers\user\ListingController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/user/listing_details')->name('user.listing_details.')->group(function () {
//        Route::get("/city-change/{id}", [App\Http\Controllers\user\listing_details_controller::class, 'onChangeCity']);
        Route::get('/create', [App\Http\Controllers\user\listing_details_controller::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\user\listing_details_controller::class, 'store'])->name('store');
        Route::get('/index', [App\Http\Controllers\user\listing_details_controller::class, 'index'])->name('index');
        Route::get('/lists', [App\Http\Controllers\user\listing_details_controller::class, 'allShow'])->name('list');
        Route::get('/edit{id}', [App\Http\Controllers\user\listing_details_controller::class, 'edit'])->name('edit');
        Route::put('/update{id}', [App\Http\Controllers\user\listing_details_controller::class, 'update'])->name('update');
        Route::delete('/delete{listing}', [App\Http\Controllers\user\listing_details_controller::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/user/facility')->name('user.facility.')->group(function () {
        Route::get('/create', [App\Http\Controllers\user\FacilityController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\user\FacilityController::class, 'store'])->name('store');
        Route::get('/index', [App\Http\Controllers\user\FacilityController::class, 'index'])->name('index');
        Route::get('/lists', [App\Http\Controllers\user\FacilityController::class, 'allShow'])->name('list');
        Route::get('/edit{facility}', [App\Http\Controllers\user\FacilityController::class, 'edit'])->name('edit');
        Route::put('/update{facility}', [App\Http\Controllers\user\FacilityController::class, 'update'])->name('update');
        Route::delete('/delete{facility}', [App\Http\Controllers\user\FacilityController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/user/feature')->name('user.feature.')->group(function () {
        Route::get('/create', [App\Http\Controllers\user\FeatureController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\user\FeatureController::class, 'store'])->name('store');
        Route::get('/index', [App\Http\Controllers\user\FeatureController::class, 'index'])->name('index');
        Route::get('/lists', [App\Http\Controllers\user\FeatureController::class, 'allShow'])->name('list');
        Route::get('/edit{feature}', [App\Http\Controllers\user\FeatureController::class, 'edit'])->name('edit');
        Route::put('/update{feature}', [App\Http\Controllers\user\FeatureController::class, 'update'])->name('update');
        Route::delete('/delete{feature}', [App\Http\Controllers\user\FeatureController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('/user/appliance')->name('user.appliance.')->group(function () {
        Route::get('/create', [App\Http\Controllers\user\ApplianceController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\user\ApplianceController::class, 'store'])->name('store');
        Route::get('/index', [App\Http\Controllers\user\ApplianceController::class, 'index'])->name('index');
        Route::get('/lists', [App\Http\Controllers\user\ApplianceController::class, 'allShow'])->name('list');
        Route::get('/edit{appliance}', [App\Http\Controllers\user\ApplianceController::class, 'edit'])->name('edit');
        Route::put('/update{id}', [App\Http\Controllers\user\ApplianceController::class, 'update'])->name('update');
        Route::delete('/delete{appliance}', [App\Http\Controllers\user\ApplianceController::class, 'destroy'])->name('destroy');
    });
});


//==============================================================
//==============================================================
//  ROUTES
//  for admin panel

Route::group(['namespace' => ''], function () {

    //Routing of profile in profileController
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('admin.profile');
    //Routing of update profile in profileController
    Route::put('/admin/profile/update/password', [ProfileController::class, 'updatePassword'])->name('admin.profile.password.update');
    Route::put('/admin/profile/update', [ProfileController::class, 'update'])->name('admin.profile.update');
    //    Route::get('admin/user/bulk','BulkController@index')->name('user.bulk.option');
    //Routing Of posts Using postController
    Route::get('/admin/dashboard', [dashboardController::class, 'index'])->name('home');
    //Routing Of Super Admin posts Using postController
    Route::get('admin/super_admin_posts', [dashboardController::class, 'super_admin'])->name('super_admin_posts');

    //Routing Of posts Using postController

    Route::get('admin/post/lists', [postController::class, 'allShow'])->name('post.list');
    Route::resource('admin/post', postController::class);


    //Routing Of category Using categoryController
    Route::get('admin/category/lists', [categoryController::class, 'allShow'])->name('category.list');
    Route::resource('admin/category', categoryController::class);

    //Routing Of subcategory Using subcategoryController
    Route::get('admin/subcategory/lists', [SubCategoryController::class, 'allShow'])->name('subcategory.list');
    Route::resource('admin/subcategory', SubCategoryController::class);

    //Routing Of Tag Using tagController
    Route::get('admin/tags/lists', [tagController::class, 'allShow'])->name('tags.list');

    Route::resource('admin/tags', tagController::class);

    //Routing Of user Using userController
    Route::get('admin/user/list', [userController::class, 'allShow'])->name('user.list');

    Route::resource('admin/user', userController::class);

    //Routing Of Permissions Using permissionController
    Route::get('admin/permission/list', [PermissionController::class, 'allShow'])->name('permission.list');

    Route::resource('admin/permission', PermissionController::class);

    // Authentication Routes...
    Route::get('admin-login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('admin-login', [LoginController::class, 'login']);
    Route::get('admin-register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('admin-register', [RegisterController::class, 'register']);
    Route::post('admin-logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::get('logout', [LoginController::class,'logout'])->name('logout');

    //listing rotes
    Route::get('admin/listing/list', [ListingController::class, 'allShow'])->name('listing.list');
    Route::resource("admin/listing", ListingController::class);
    Route::get("/admin/listing/city-change/{id}", [ListingController::class, 'onChangeCity'])->name('admin.listing.city.change');
    Route::get("/admin/listing/subcategory-change/{id}", [ListingController::class, 'onChangeSubCategory'])->name('admin.listing.category.change');


    //
    Route::get('admin/facility/list', [FacilityController::class, 'allShow'])->name('facility.list');
    Route::resource("admin/facility", FacilityController::class);
    //
    Route::get('admin/features/list', [FeatureController::class, 'allShow'])->name('features.list');
    Route::resource("admin/features", FeatureController::class);
    //country controller
    Route::get('admin/country/list', [CountryController::class, 'allShow'])->name('country.list');
    Route::resource("admin/country", CountryController::class);

    //state controller
    Route::get('admin/state/list', [StateController::class, 'allShow'])->name('state.list');
    Route::resource("admin/state", StateController::class);

    //city controller
    Route::get('admin/city/list', [CityController::class, 'allShow'])->name('city.list');
    Route::resource("admin/city", CityController::class);

    //town controller
    Route::get('admin/town/list', [TownController::class, 'allShow'])->name('town.list');
    Route::resource("admin/town", TownController::class);

    //
    //companyRole rotes
    Route::get('admin/companyRole/list', [CompanyRoleController::class, 'allShow'])->name('company.role.list');
    Route::resource("admin/companyRole", CompanyRoleController::class);

    //company rotes
    Route::get('admin/company/list', [CompanyController::class, 'allShow'])->name('company.list');
    Route::resource("admin/company", CompanyController::class);

    //project rotes
    Route::get('admin/project/list', [ProjectController::class, 'allShow'])->name('project.list');
    Route::resource("admin/project", ProjectController::class);
    //project Type rotes
    Route::get('admin/projectType/list', [ProjectTypeController::class, 'allShow'])->name('projectType.list');
    Route::resource("admin/projectType", ProjectTypeController::class);
    //property list
    Route::get('admin/property/list', [PropertyController::class, 'allShow'])->name('property.list');
    Route::resource("admin/property", PropertyController::class);
    //    Route::resource("admin/category",Type::class);

    //Appliance routes
    Route::get('admin/appliance/create', [\App\Http\Controllers\ApplianceController::class, 'create'])->name('appliance.create');
    Route::post('admin/appliance/store', [\App\Http\Controllers\ApplianceController::class, 'store'])->name('appliance.store');
    Route::get('admin/appliance/index', [\App\Http\Controllers\ApplianceController::class, 'index'])->name('appliance.index');
    Route::get('admin/appliance/list', [\App\Http\Controllers\ApplianceController::class, 'list'])->name('appliance.list');
    Route::get('admin/appliance/edit{id}', [\App\Http\Controllers\ApplianceController::class, 'edit'])->name('appliance.edit');
    Route::put('admin/appliance/update{id}', [\App\Http\Controllers\ApplianceController::class, 'update'])->name('appliance.update');
    Route::get('admin/appliance/delete{id}', [\App\Http\Controllers\ApplianceController::class, 'destroy'])->name('appliance.destroy');

    // Roles Routes
    Route::prefix('/admin/role')->name('admin.role.')->group(function () {
        Route::get('/list', [RoleController::class, 'list'])->name('list');
        Route::get('/index', [RoleController::class, 'index'])->name('index');
        Route::get('/create', [RoleController::class, 'create'])->name('create');
        Route::post('/store', [RoleController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [RoleController::class, 'update'])->name('update');
        Route::get('/show/{id}', [RoleController::class, 'show'])->name('show');
        Route::post('/delete/{id}', [RoleController::class, 'destroy'])->name('delete');
    });
});
//dashboard
//Route::get('dashboard/analytics',function (){
//    return view('second-admin.pages.dashboard.dashboardAnalytics');
//})->name('dashboard.analytics');
//
//Route::get('dashboard/ecommerce',function (){
//    return view('second-admin.pages.dashboard.dashboardEcommerce');
//})->name('dashboard.ecommerce');

//==============================================================
//==============================================================
//Auth Routes file added by laravel/ui package by default
require __DIR__ . '/auth.php';
