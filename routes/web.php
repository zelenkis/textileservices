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

Route::get('/', 'IndexController@index');

Route::get('/gallery', 'GalleryController@index');

// Route::group(['middleware' => ['web']], function () {
//     //routes here
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('contact-us', 'ContactUsController@contactUS');
Route::post('message-sent', ['as'=>'contactus.store','uses'=>'ContactUsController@contactUSPost']);
Route::post('thank-you-message-sent', 'ContactUsController@reply');
