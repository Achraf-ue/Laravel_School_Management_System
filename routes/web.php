<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;

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
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('index');
});
//Admin route 
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'Logout')->name('admin.logout');     
});
//User route
Route::controller(UserController::class)->group(function () {
    //Route::prefix('User')->group(function(){});
    Route::get('/User/View','User_View')->name('User.view'); 
        
});
