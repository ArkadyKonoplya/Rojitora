
<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::get('refresh', 'AuthController@refresh');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('user', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');
    });
});


Route::group(['middleware' => 'auth:api'], function(){
    // Users
    Route::get('users', 'UserController@index')->middleware('isAdmin');
    Route::get('users/{id}', 'UserController@show')->middleware('isAdminOrSelf');
    // show Items

    //Emptycar router
    Route::get('emptycars','EmptycarsController@index');
    Route::post('emptycar/store','EmptycarsController@store');
    Route::post('emptycar/{id}/delete','EmptycarsController@destroy');
    Route::get('emptycar/{id}/edit','EmptycarsController@edit');
    Route::patch('emptycar/{id}/update','EmptycarsController@update');
    Route::post('emptycar/search', 'EmptycarsController@search');

    //Luggagages router
    Route::get('luggages','LuggagesController@index');
    Route::post('luggage/store','LuggagesController@store');
    Route::post('luggage/{id}/delete','LuggagesController@destroy');
    Route::get('luggage/{id}/edit','LuggagesController@edit');
    Route::patch('luggage/{id}/update','LuggagesController@update');

    //Mail_manages router
    Route::get('mail_manages','Mail_managesController@index');
    Route::post('mail_manage/store','Mail_managesController@store');
    Route::post('mail_manage/{id}/delete','Mail_managesController@destroy');
    Route::get('mail_manage/{id}/edit','Mail_managesController@edit');
    Route::patch('mail_manage/{id}/update','Mail_managesController@update');

});


    Route::get('items','ItemController@index');
    // add Item
    Route::post('item/store','ItemController@store');
    // delete Item
    Route::post('item/{id}/delete','ItemController@destroy');
    //Edit Item
    Route::get('item/{id}/edit','ItemController@edit');
    //Update Item
    Route::patch('item/{id}/update','ItemController@update');
