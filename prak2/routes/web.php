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
use App\Http\Controllers\PageController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HalamanHome;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HalamanProduct;
use App\Http\Controllers\HalamanNews;
use App\Http\Controllers\HalamanAboutUs;
use App\Http\Controllers\HalamanContactUs;
use App\Http\Controllers\HalamanProgram;

Route ::get('/Home', [HalamanHome::class,'index']);

Route :: prefix('Kategori')->group(function(){
    Route::get('/marbeledugames', [HalamanProduct::class, 'index1']);
    Route::get('/marbelandfriendskidsgames', [HalamanProduct::class, 'index2']);
    Route::get('/riristorybooks', [HalamanProduct::class, 'index3']);
    Route::get('/kolakkidssongs', [HalamanProduct::class, 'index4']);
});

Route ::get('/news/{id}', [HalamanNews::class,'index5']);

Route :: prefix('list')->group(function(){
    Route::get('/Karir', [HalamanProgram::class, 'index6']);
    Route::get('/Magang', [HalamanProgram::class, 'index7']);
    Route::get('/KunjunganIndustri', [HalamanProgram::class, 'index8']);
});

Route ::get('/aboutus', [HalamanAboutUs::class,'index9']);

Route ::get('/ContactUs', [HalamanContactUs::class,'index10']);