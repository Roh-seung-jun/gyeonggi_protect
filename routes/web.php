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

Route::get('/', function () {
//    $file = json_decode(file_get_contents('./public/data/art.json'));
//    foreach ($file as $idx => $data){
//        foreach ($data as $code => $item){
//            $input = [
//                'name' => $item->name,
//                'art_name' => $item->art_name,
//                'price' => $item->price,
//                'product_img' => $item->product_img,
//                'description' => $item->description,
//                'type' => $idx,
//                'code' => $code
//            ];
//            \App\Art::create($input);
//        }
//    }
    return view('index');
});


Route::get('/login','UserController@login')->name('login');
Route::get('/logout','UserController@logout')->name('logout');
Route::get('/art','ArtController@index')->name('art_list');
Route::get('/art_view/{id}','ArtController@view')->name('art_view');
Route::get('/cart','ArtController@cartPage')->name('cart');
Route::get('/art_create','ArtController@art_create')->name('art_create');
Route::get('/art_search','ArtController@art_search')->name('art_search');
Route::get('/build','BuildController@index')->name('build');
Route::get('/addBuild','BuildController@addPage')->name('addBuild');

Route::post('/buy','ArtController@buy')->name('buy');
Route::get('/history/{id}','ArtController@history')->name('history');
Route::get('/delete/{id}','ArtController@delete')->name('delete');
Route::post('/modal','ArtController@modal')->name('modal');
Route::post('/modify','ArtController@modify')->name('modify');
Route::post('/post','BuildController@post')->name('post');

Route::post('/create','ArtController@create')->name('create');
Route::post('/getBuild','BuildController@getBuild')->name('getBuild');
Route::post('/getData','ArtController@getData')->name('getData');
Route::post('/login','UserController@loginAction')->name('login');
