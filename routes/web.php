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

/*
|--------------------------------------------------------------------------
| Routes Website
|--------------------------------------------------------------------------
*/
    Route::get('/', 'InfoCoronaController@index')->name('index');
    Route::get('/login', 'Auth\LoginController@index')->name('login');
    Route::post('/login', 'Auth\LoginController@login')->name('login.post');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/global', 'InfoCoronaController@DataGlobal')->name('global');
    Route::get('/indonesia', 'InfoCoronaController@DataIndonesia')->name('indonesia');
    Route::get('/article-page', 'ArticleController@show');
    Route::get('/detail-article', 'ArticleController@detail');
    Route::get('/detail-rs', function () {
        return view('detail-rs');
    });
/*
|--------------------------------------------------------------------------
| End Routes Website
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Routes Dashboard
|--------------------------------------------------------------------------
*/
    Route::get('/dashboard', 'InfoCoronaController@DataDashboard');
    Route::get('/data-global', 'InfoCoronaController@DataGlobalDashboard');
    Route::get('/data-indonesia', 'InfoCoronaController@DataIndonesiaDashboard');
    Route::get('/rs-rujukan', 'RumahSakitController@index');
    Route::get('/article', 'ArticleController@index');    
/*
|--------------------------------------------------------------------------
| End Routes Website
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Routes CRUD Data Rumah Sakit
|--------------------------------------------------------------------------
*/
    Route::get('/form-rs', 'RumahSakitController@form');
/*
|--------------------------------------------------------------------------
| End Routes Website
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Routes CRUD Data Rumah Sakit
|--------------------------------------------------------------------------
*/
    Route::get('/form-article', 'ArticleController@form');
/*
|--------------------------------------------------------------------------
| End Routes Website
|--------------------------------------------------------------------------
*/