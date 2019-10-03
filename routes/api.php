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
 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->post('/logout','AuthController@logout');
/* control routes*/ 

Route::post('/control','ControlController@create');

/* budgets routes */

Route::post('/budget','BudgetController@create');
Route::post('/budget/update','BudgetController@update');
Route::post('/budget/getById','BudgetController@getById');
Route::post('/budget/delete','BudgetController@remove');

Route::get('/budget/getAll/{id}','BudgetController@getAll');
//pagination
Route::get('/budget/getAll/id/{id}','BudgetController@getAllById');

/* types routes */
Route::post('/type','TypeController@create');
Route::get('/type','TypeController@getAll');
Route::get('/type/id/{id}','TypeController@getAllById');

/* auth */
Route::post('/login','AuthController@login');
Route::post('/register','AuthController@register');

