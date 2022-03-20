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
use App\Http\Controllers\HalamanHome;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HalamanProducts;
use App\Http\Controllers\HalamanNews;
use App\Http\Controllers\HalamanAboutUs;
use App\Http\Controllers\HalamanContactUs;
use App\Http\Controllers\HalamanProgram;

Route ::get('/Home', [HalamanHome::class,'idx']);

Route :: prefix('category')->group(function(){
    Route::get('/marbeledugames', [HalamanProducts::class, 'idx1']);
    Route::get('/marbelandfriendskidsgames', [HalamanProducts::class, 'idx2']);
    Route::get('/riristorybooks', [HalamanProducts::class, 'idx3']);
    Route::get('/kolakkidssongs', [HalamanProducts::class, 'idx4']);
});

Route ::get('/news/{id}', [HalamanNews::class,'idx5']);

Route :: prefix('list')->group(function(){
    Route::get('/Karir', [HalamanProgram::class, 'idx6']);
    Route::get('/Magang', [HalamanProgram::class, 'idx7']);
    Route::get('/KunjunganIndustri', [HalamanProgram::class, 'idx8']);
});

Route ::get('/aboutus', [HalamanAboutUs::class,'idx9']);

Route ::get('/ContactUs', [HalamanContactUs::class,'idx10']);