<?php

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

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/dashboard', function () { return view('portal.dashboard.index');});
Route::get('/company', function () { return view('portal.company.index');});
Route::get('/user', function () { return view('portal.user.index');});
Route::get('/customer', function () {return view('portal.customer.index');});
Route::get('/services', function () { return view('portal.services.index');});
Route::get('/job', function () { return view('portal.job.index');});
Route::get('/approval', function () { return view('portal.approval.index');});
