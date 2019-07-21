<?php

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

Route::get('files/fileFrom/{folder}/{filename}',['uses'=>'HomeController@getFile','as'=>'get.files']);

Route::prefix('admin')->group(function () {

    /****Login Section*************/

         Route::get('/login',['uses'=>'Auth\LoginController@showLoginForm','as'=>'admin.login']);
         Route::post('/login',['uses'=>'Auth\LoginController@login','as'=>'admin.login']);

         Route::get('/logout',['uses'=>'Auth\LoginController@logout','as'=>'admin.logout']);

    /****End Login Section*********/



    /*****DashBoard Section********/

         Route::get('/dash',['uses'=>'PanelController@dash','as'=>'admin.dash']);

    /****End DashBoard Section******/


    /****Articles section *********/

         Route::get('/Article',['uses'=>'PanelController@articles','as'=>'admin.articles']);
         Route::post('/Article',['uses'=>'PanelController@articles','as'=>'admin.articles']);

         Route::get('/Article/Comment/{id}',['uses'=>'PanelController@articles','as'=>'admin.articles.comments']);

    /****End Articles section *****/


    /****Gallery section *********/

         Route::get('/Gallery',['uses'=>'PanelController@galleries','as'=>'admin.galleries']);

    /****End Gallery section *****/


    /****Society section *********/

         Route::get('/Society',['uses'=>'PanelController@societies','as'=>'admin.societies']);

    /****End Society section *****/


    /****Project section *********/

         Route::get('/Project',['uses'=>'PanelController@projects','as'=>'admin.projects']);

    /****End Project section *****/















    /****Profile section *********/

    Route::get('/profile/settings',['uses'=>'PanelController@profile','as'=>'admin.profile']);

    /****End Profile section *****/
});



