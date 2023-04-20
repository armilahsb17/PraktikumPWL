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

//Route::get('/', function () {
 //   return view('welcome');
//});

//Route::get('/halo', function () {
//    return view('halo');
//});

use App\Http\Controllers\PostingController;

// Route::get('/post/{id}', [PostingController::class, 'index']);
   
route::resource('post',PostingController::class);
use App\Http\Controllers\admincontroller;
route::get('admin/dashboard', [admincontroller::class, 'index']);
route::get('admin/post', [admincontroller::class, 'post']);
route::get('admin/arsip', [admincontroller::class, 'arsip']);
route::get('admin/privasi akun', [admincontroller::class, 'privasi']);
route::get('admin/pengaturan', [admincontroller::class, 'pengaturan']);
route::get('admin/logout', [admincontroller::class, 'logout']);