<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\applicationController;
use App\Http\Controllers\CompanyController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/company/show', [CompanyController::class, 'index']);
Route::get('/company/{id}/edit', [CompanyController::class, 'edit']);
Route::put('/company/{id}/update', [CompanyController::class, 'update']);
Route::post('/company/register', [CompanyController::class, 'store']);
Route::view('/company/register', 'companyRegister');
Route::get('/company/list-applications', [applicationController::class, 'listOfApplication']);
Route::get('/company/list-applications/{jobpostID}', [applicationController::class, 'listOfApplicationByJobPost']);
Route::get('/application/status/update', [applicationController::class, 'updateStatus'])->name('update.status');
