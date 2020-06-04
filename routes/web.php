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

Auth::routes();

/*
|--------------------------------------------------------------------------
| Routes Website
|--------------------------------------------------------------------------
*/
    Route::get('/', 'InfoCoronaController@index')->name('index');
    Route::get('/global', 'InfoCoronaController@DataGlobal')->name('global');
    Route::get('/indonesia', 'InfoCoronaController@DataIndonesia')->name('indonesia');
    Route::get('/article-page', 'ArticleController@show');
    Route::get('/detail-article', 'ArticleController@detail');
    Route::get('/form-login', 'Auth\LoginController@index')->name('index-login');
    Route::post('/login','Auth\LoginController@login')->name('login');
    Route::get('/detail-rs', function () {
        return view('detail-rs');
    });
    Route::post('/get-data-indo',function(){
        echo json_encode(getGrafikIndo());
    });
    Route::post('/get-kasus-indo',function(){
        echo json_encode(getIndonesiaCases());
    });
    Route::post('get-most-recovered',function(){
        echo json_encode(getMostRecoveredCountry());
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
    Route::get('/dashboard', 'InfoCoronaController@DataDashboard')->name('dashboard');
    Route::get('/data-global', 'InfoCoronaController@DataGlobalDashboard');
    Route::get('/data-indonesia', 'InfoCoronaController@DataIndonesiaDashboard');
    Route::get('/rs-rujukan', 'RumahSakitController@index');
    Route::get('/article', 'ArticleController@index');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth:web');
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