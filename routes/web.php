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
Route::get('/',['uses'=>'HomeController@index','as'=>'home']);


/***for trucate date  devlopping mode */
Route::get('/cleandata',['uses'=>'HomeController@cleanData','as'=>'clean']);

/***for trucate date  devlopping mode */
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
         Route::delete('/Article',['uses'=>'PanelController@delete','as'=>'admin.articles.delete']);

         Route::get('/Article/Comment/{id}',['uses'=>'PanelController@articles','as'=>'admin.articles.comments']);

    /****End Articles section *****/


     /****Prospects section *********/

        Route::get('/Prospect',['uses'=>'PanelController@prospects','as'=>'admin.prospects']);
        Route::post('/Prospect',['uses'=>'PanelController@prospects','as'=>'admin.prospects']);
        Route::delete('/Prospect',['uses'=>'PanelController@delete','as'=>'admin.prospects.delete']);


/****End Prospects section *****/

    /****Gallery section *********/

         Route::get('/Gallery',['uses'=>'PanelController@galleries','as'=>'admin.galleries']);

    /****End Gallery section *****/


    /****Society section *********/

         Route::get('/Society',['uses'=>'PanelController@societies','as'=>'admin.societies']);
         Route::post('/Society',['uses'=>'PanelController@societies','as'=>'admin.societies']);
         Route::delete('/Society',['uses'=>'PanelController@delete','as'=>'admin.societies.delete']);
         Route::put('/Society',['uses'=>'PanelController@societies','as'=>'admin.societies']);
    /****End Society section *****/


    /****Project section *********/

         Route::get('/Project',['uses'=>'PanelController@projects','as'=>'admin.projects']);
         Route::post('/Project',['uses'=>'PanelController@projects','as'=>'admin.projects']);
         Route::delete('/Project',['uses'=>'PanelController@deleteProject','as'=>'admin.projects.delete']);
    /****End Project section *****/




    /****Project section *********/

         Route::get('/Category',['uses'=>'PanelController@categories','as'=>'admin.categories']);
         Route::post('/Category',['uses'=>'PanelController@categories','as'=>'admin.categories']);
         Route::delete('/Category',['uses'=>'PanelController@delete','as'=>'admin.categories.delete']);
/****End Project section *****/










    /****Profile section *********/

    Route::get('/profile/settings',['uses'=>'PanelController@profile','as'=>'admin.profile']);

    /****End Profile section *****/
});



