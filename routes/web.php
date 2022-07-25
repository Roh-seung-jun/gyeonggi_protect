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
    if(\App\Garden::all()->count() === 0){
        $file = json_decode(file_get_contents('public/JSON/garden.json'));
        foreach($file->gardens as $idx => $item){
            $input = [];
            $input['name'] = $item->name;
            $input['longitude'] = $item->longitude;
            $input['latitude'] = $item->latitude;
            $input['phone'] = $item->phone;
            $input['address'] = $item->address;
            $input['management'] = $item->management;
            $input['user_id'] = 'user_'.$idx;
            $garden = \App\Garden::create($input);
            foreach ($item->themes as $e){
                $type = [];
                $type['garden_id'] = $garden['id'];
                $type['type'] = $e;
                \App\Type::create($type);
            }
        }
    }
    return view('index');
})->name('/');


Route::get('/sign','UserController@signPage')->name('sign');
Route::get('/notice','NoticeController@noticePage')->name('notice');
Route::get('/login','UserController@loginPage')->name('login');
Route::get('/logout','UserController@logout')->name('logout');
Route::get('/introduce','GardenController@introducePage')->name('introduce');
Route::get('/history','GardenController@historyPage')->name('history');
Route::get('/view/{id}','GardenController@viewPage')->name('view');
Route::get('/promise/{id}','GardenController@promisePage')->name('promise');
Route::get('/delete/{id}','GardenController@delete')->name('delete');

Route::post('/review/{id}','ReviewController@review')->name('review');
Route::post('/check','GardenController@check')->name('check');
Route::post('/disable','GardenController@disable')->name('disable');
Route::post('/promise','GardenController@promise')->name('promise');
Route::post('/sign','UserController@sign')->name('sign');
Route::post('/login','UserController@login')->name('login');
