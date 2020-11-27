<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\ApiUsers;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



    /*
    |	to rout all
    |	Route::ApiResource('apiusers', 'ApiUsersController');
    |
    |*/


// +--------+----------+----------------+------+----------------------------------------------------+------------+
// | Domain | Method   | URI            | Name | Action                                             | Middleware |
// +--------+----------+----------------+------+----------------------------------------------------+------------+
// |        | GET|HEAD | api            |      | App\Http\Controllers\ApiUsersController@index      | api        |
// |        | POST     | api/givepoints |      | App\Http\Controllers\ApiUsersController@givepoints | api        |
// |        | POST     | api/submit     |      | App\Http\Controllers\ApiUsersController@store      | api        |
// |        | GET|HEAD | api/{ApiUsers} |      | App\Http\Controllers\ApiUsersController@show       | api        |
// |        | PUT      | api/{ApiUsers} |      | App\Http\Controllers\ApiUsersController@update     | api        |
// |        | DELETE   | api/{ApiUsers} |      | App\Http\Controllers\ApiUsersController@destroy    | api        |
// +--------+----------+----------------+------+----------------------------------------------------+------------+


Route::get('/'					, 'ApiUsersController@index');
Route::get('/{ApiUsers}'		, 'ApiUsersController@show');
Route::post('/submit'			, 'ApiUsersController@store');
// Route::get('/help'					, 'ApiUsersController@help');


/*
|
|	using put/post to give calculate points 
|
|*/

Route::post('/givepoints'		, 'ApiUsersController@givepoints'); 

/*
|
|	we could also do it by update 
|
|*/

// Route::put('/{ApiUsers}/{point}', 'ApiUsersController@update');
Route::put('/{ApiUsers}', 'ApiUsersController@update');
Route::delete('/{ApiUsers}'		, 'ApiUsersController@destroy');