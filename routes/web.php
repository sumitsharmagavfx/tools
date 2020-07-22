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

Route::resource('/', 'HomeController');
//Route::get('/test', function (){
//    return view('/tools/strikethrough');
//});

Route::get('/strikethrough', 'ToolsController@strikethrough');
Route::get('/json-ld-faq-schema-generator', 'ToolsController@FAQ');
Route::get('/word-counter', 'ToolsController@wordcounter');
Route::get('/page-title-meta-description-checker', 'ToolsController@metachecker');
Route::get('/dummy-credit-card-generator', 'ToolsController@creditcard');
Route::get('/symbol-and-text-generator', 'ToolsController@symbolandtext');
Route::get('/page-speed', 'ToolsController@pagespeed');
Route::get('/construction', function (){
    return view('premiumtools');
});
Route::get('/en', 'ToolsController@englishVersion');
Route::get('/id', 'ToolsController@indonesiaVersion');
