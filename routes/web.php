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

Route::get('/portfolio/{slug}',['uses'=>'HomeController@project','as'=>'project.single']);


Route::post('/contact',['uses'=>'HomeController@index','as'=>'contact']);

/***for trucate date  devlopping mode */

Route::get('/cleandata',['uses'=>'HomeController@cleanData','as'=>'clean']);

/***for trucate date  devlopping mode */

Route::get('files/fileFrom/{folder}/{filename}',['uses'=>'HomeController@getFile','as'=>'get.files']);

Route::get('files/fileFrom/{ste}/{folder}/{filename}',['uses'=>'HomeController@getFileProjects','as'=>'get.files.projects']);

Route::prefix('admin')->group(function () {

    Route::get('/login',['uses'=>'Auth\LoginController@showLoginForm','as'=>'admin.login']);
    Route::post('/login',['uses'=>'Auth\LoginController@login','as'=>'admin.login']);

});

Route::group(['middleware' => 'auth:admin'], function () {

    Route::prefix('admin')->group(function () {

        /****logout Section*************/



        Route::get('/logout',['uses'=>'Auth\LoginController@logout','as'=>'admin.logout']);

        /****End logout Section*********/



        /*****DashBoard Section********/

        Route::get('/',['uses'=>'PanelController@dash','as'=>'admin.dash']);

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
        Route::put('/Project',['uses'=>'PanelController@projects','as'=>'admin.projects']);
        Route::delete('/Project',['uses'=>'PanelController@deleteProject','as'=>'admin.projects.delete']);
        Route::get('/Project/gallery/{id}',['uses'=>'PanelController@galleryProject','as'=>'admin.projects.gallery']);
        Route::delete('/Project/gallery/{id}',['uses'=>'PanelController@galleryDelete','as'=>'admin.projects.gallery.delete']);
        /****End Project section *****/




        /****Project section *********/

        Route::get('/Category',['uses'=>'PanelController@categories','as'=>'admin.categories']);
        Route::post('/Category',['uses'=>'PanelController@categories','as'=>'admin.categories']);
        Route::delete('/Category',['uses'=>'PanelController@delete','as'=>'admin.categories.delete']);


        /****End Project section *****/

        /****Articles section *********/

        Route::get('/Service',['uses'=>'PanelController@services','as'=>'admin.services']);
        Route::post('/Service',['uses'=>'PanelController@services','as'=>'admin.services']);
        Route::delete('/Service',['uses'=>'PanelController@delete','as'=>'admin.services.delete']);


        /****End Articles section *****/

        /****Articles section *********/

        Route::get('/About',['uses'=>'PanelController@abouts','as'=>'admin.abouts']);
        Route::post('/About',['uses'=>'PanelController@abouts','as'=>'admin.abouts']);
        Route::delete('/About',['uses'=>'PanelController@delete','as'=>'admin.abouts.delete']);


        /****End Articles section *****/







        /****Profile section *********/

        Route::get('/profile/settings',['uses'=>'PanelController@profile','as'=>'admin.profile']);

        /****End Profile section *****/
    });


});




