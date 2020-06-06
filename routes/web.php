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
    Route::get('/article-page', 'ArticleController@index');
    Route::get('/detail-article/{id}', 'ArticleController@show');
    Route::get('/form-login', 'Auth\LoginController@index')->name('index-login');
    Route::post('/login','Auth\LoginController@login')->name('login');
    Route::get('/detail-rs/{id}', 'HospitalController@show');
    Route::post('/get-data-indo',function(){
        echo json_encode(getGrafikIndo());
    });
    Route::post('/get-data-provinsi',function(){
        echo json_encode(infectedByProvince());
    });
    Route::post('/get-data-global',function(){
        echo json_encode(infectedGlobalPerCountry());
    });
    Route::get('/get-data-global',function(){
       var_dump(infectedGlobalPerCountry());
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
    Route::get('/rs-rujukan', 'HospitalController@index');
    Route::get('/article', 'ArticleController@indexDashboard');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth:web');
    Route::post('/get-grafik-article',function(){
        echo json_encode(getGrafikArticle());
    });
    Route::post('/get-grafik-hospital',function(){
        echo json_encode(getGrafikHospital());
    });
    Route::post('/get-data-indo',function(){
        echo json_encode(getGrafikIndo());
    });
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
    Route::get('/rs', 'HospitalController@create')->name('rs');
    Route::get('/rs/{id}','HospitalController@show');
    Route::get('/rs/{id}/edit', 'HospitalController@edit');
    Route::post('/rs','HospitalController@store');
    Route::patch('/rs/{id}','HospitalController@update');
    Route::delete('/rs/{id}','HospitalController@destroy');
/*
|--------------------------------------------------------------------------
| End Routes Website
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Routes CRUD Data Artikel
|--------------------------------------------------------------------------
*/
    Route::get('/form-article', 'ArticleController@create');
    Route::get('/article/{id}/edit','ArtikelController@edit');
    Route::post('/article','ArticleController@store');
    Route::patch('/article/{id}','ArticleController@update');
    Route::delete('/article/{id}','ArticleController@destroy');
/*
|--------------------------------------------------------------------------
| End Routes Website
|--------------------------------------------------------------------------
*/