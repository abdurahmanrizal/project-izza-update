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

// Route::get('/', function () {
//     return view('landingpage.index');
// })->name('dashboard');
Route::get('/', 'landingPageController@index')->name('dashboard');

Route::get('/about-us', function(){
    return view('landingpage.about_us');
})->name('about');

Route::get('/client', function(){
    return view('landingpage.client');
})->name('client');

Route::get('/proses-sertifikasi', function(){
    return view('landingpage.sertification');
})->name('view.process.sertification');

Route::get('/service/{name}', 'landingPageController@service')->name('detail.service');

Route::group(['prefix' => 'news'], function () {
    Route::get('all', function(){
        return view('landingpage.all_news');
    })->name('view.all.news');
    Route::get('all/news','landingPageController@allNews')->name('all.news');
    // Route::get('detail/{name}','landingPageController@detailNews')->name('detail.news');
    Route::get('detail/{name}', function(){
        return view('landingpage.detail_news');
    })->name('detail.news');
    Route::post('news/detail','landingPageController@detailNews')->name('data.detail.news');
    Route::post('comment','landingPageController@commentNews')->name('comment.news');
    Route::post('insert/comment','landingPageController@storeCommentNews')->name('insert.comment.news');
});

Route::get('/all/gallery', 'landingPageController@allGallery')->name('view.all.gallery');
Route::get('/proses-pengaduan','landingPageController@customerComplain')->name('customer.complain');
Route::group(['prefix' => 'slo'], function() {
    Route::get('prosedur-pengajuan', 'landingPageController@prosedurPengajuan')->name('slo.prosedur.pengajuan');
    Route::get('persyaratan-pendaftaran', 'landingPageController@persyaratanPengajuan')->name('slo.persyaratan.pengajuan');
    Route::get('biaya', 'landingPageController@biayaSlo')->name('slo.biaya');
    Route::get('contoh', 'landingPageController@contohSlo')->name('slo.contoh');
});
Route::get('/izin-usaha', 'landingPageController@izinUsaha')->name('izin.usaha');
