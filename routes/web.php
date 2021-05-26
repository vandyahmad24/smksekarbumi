<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelulusanController;
use App\Http\Controllers\UsersController;
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


Route::get('/', [FrontController::class, 'index'])->name('root');
Route::get('/article/{slug}', [FrontController::class, 'article'])->name('article');
Route::get('/all-article', [FrontController::class, 'articleAll'])->name('all-article');
Route::get('/all-photo', [FrontController::class, 'photoAll'])->name('all-photo');
Route::get('/page/{slug}', [FrontController::class, 'page'])->name('page');
Route::get('/jurusan/{slug}', [FrontController::class, 'jurusan'])->name('jurusan-detail');
Route::get('/kelulusan', [FrontController::class, 'kelulusan'])->name('kelulusan');
Route::post('/cek-nilai', [FrontController::class, 'cekNilai'])->name('cek-nilai');


Auth::routes([
    'register' => false, 
    'reset' => false, 
    'verify' => false, 
]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Route::get('profile',[UsersController::class, 'profile'])->name('profile');
    Route::post('change-profile',[UsersController::class, 'changeProfile'])->name('change-profile');
    Route::post('change-password',[UsersController::class, 'changePassword'])->name('change-password');

    Route::get('konfigurasi',[AdminController::class, 'konfigurasi'])->name('konfigurasi');
    Route::get('konfigurasi-edit/{id}',[AdminController::class, 'konfigurasiEdit'])->name('konfigurasi-edit');
    Route::post('konfigurasi-put',[AdminController::class, 'konfigurasiPut'])->name('konfigurasi-put');

    // banner
    Route::get('banner-edit/{id}',[AdminController::class, 'bannerEdit'])->name('banner-edit');
    Route::post('banner-put',[AdminController::class, 'bannerPut'])->name('banner-put');

    Route::get('profile-sekolah',[AdminController::class, 'profileSekolah'])->name('profile-sekolah');
    Route::get('profile-sekolah/add',[AdminController::class, 'profileSekolahAdd'])->name('profile-sekolah-add');
    Route::post('profile-sekolah/add',[AdminController::class, 'profileSekolahPost'])->name('profile-sekolah-post');
    Route::get('profile-sekolah/{id}',[AdminController::class, 'profileSekolahEdit'])->name('profile-sekolah-edit');
    Route::post('profile-sekolah',[AdminController::class, 'profileSekolahPut'])->name('profile-sekolah-put');
    Route::get('profile-sekolah/delete/{id}',[AdminController::class, 'profileSekolahDelete'])->name('profile-sekolah-delete');
    // jurusan
    Route::get('jurusan',[JurusanController::class, 'index'])->name('jurusan');
    Route::get('jurusan/add',[JurusanController::class, 'add'])->name('jurusan-add');
    Route::post('jurusan/add',[JurusanController::class, 'post'])->name('jurusan-post');
    Route::get('jurusan/edit/{id}',[JurusanController::class, 'edit'])->name('jurusan-edit');
    Route::post('jurusan/edit/',[JurusanController::class, 'put'])->name('jurusan-put');
    Route::get('jurusan/delete/{id}',[JurusanController::class, 'delete'])->name('jurusan-delete');
    // article
    Route::get('article',[ArticleController::class, 'index'])->name('article-admin');
    Route::get('article/add',[ArticleController::class, 'add'])->name('article-add');
    Route::post('article/add',[ArticleController::class, 'post'])->name('article-post');
    Route::get('article/edit/{id}',[ArticleController::class, 'edit'])->name('article-edit');
    Route::post('article/edit/',[ArticleController::class, 'put'])->name('article-put');
    Route::get('article/delete/{id}',[ArticleController::class, 'delete'])->name('article-delete');
    // galeri
    Route::get('galeri',[GaleriController::class, 'index'])->name('galeri-admin');
    Route::get('galeri/add',[GaleriController::class, 'add'])->name('galeri-add');
    Route::post('galeri/add',[GaleriController::class, 'post'])->name('galeri-post');
    Route::get('galeri/edit/{id}',[GaleriController::class, 'edit'])->name('galeri-edit');
    Route::post('galeri/edit/',[GaleriController::class, 'put'])->name('galeri-put');
    Route::get('galeri/delete/{id}',[GaleriController::class, 'delete'])->name('galeri-delete');

    // kelulusan
    Route::get('kelulusan',[KelulusanController::class, 'index'])->name('kelulusan-admin');
    Route::get('kelulusan/add',[KelulusanController::class, 'add'])->name('kelulusan-add');
    Route::post('kelulusan/add',[KelulusanController::class, 'post'])->name('kelulusan-post');
    Route::get('kelulusan/edit/{id}',[KelulusanController::class, 'edit'])->name('kelulusan-edit');
    Route::post('kelulusan/edit/',[KelulusanController::class, 'put'])->name('kelulusan-put');
    Route::get('kelulusan/delete/{id}',[KelulusanController::class, 'delete'])->name('kelulusan-delete');

});