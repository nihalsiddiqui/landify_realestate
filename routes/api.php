<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\ProjectController;
use App\Models\Project;
use App\Http\Controllers\Api\ListingController;
use App\Http\Controllers\Api\PropertyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::get('/projects', [ProjectController::class, 'projects']);
Route::get('/project/{id}', [ProjectController::class, 'get']);

Route::get('/company', [CompanyController::class, 'company']);
Route::get('/company/{id}', [CompanyController::class, 'getCompany']);

Route::get('/property', [PropertyController::class, 'property']);
Route::get('/property/{id}', [PropertyController::class, 'getProperty']);

Route::get('/featured/list', [ListingController::class, 'featuredList']);
Route::get('/hot_offer/list', [ListingController::class, 'HotOfferList']);
Route::get('/open_house/list', [ListingController::class, 'OpenHouseList']);
Route::get('/foreclosure/list', [ListingController::class, 'ForeClosureList']);
Route::get('/listings', [ListingController::class, 'listings']);
Route::get('/list/{id}', [ListingController::class, 'getList']);
