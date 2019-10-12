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

/* proteger rutas !!! */

/* control routes*/ 
Route::post('/control','ControlController@create');
Route::get('/control/{id}','ControlController@getAll');
Route::post('/control/delete','ControlController@destroy');

/* budgets routes */
Route::post('/budget','BudgetController@create');
Route::post('/budget/update','BudgetController@update');
Route::post('/budget/getById','BudgetController@getById');
// {id} es id // obtener los gastos
Route::get('/budget/getExpenses/{id}','BudgetController@getExpenses');
Route::post('/budget/delete','BudgetController@remove');
// {id} es user_id 
Route::get('/budget/getAll/{id}/{control_id?}','BudgetController@getAll');

//pagination
Route::get('/budget/getAll/id/{id}/{control_id?}','BudgetController@getAllById');

/* expense routes*/
Route::post('/expense','ExpenseController@create');
Route::post('/expense/delete','ExpenseController@remove');
Route::get('/expense/{id}/{control_id?}','ExpenseController@getAll');

/* types routes */
Route::post('/type','TypeController@create');
Route::get('/type','TypeController@getAll');
Route::get('/type/id/{id}','TypeController@getAllById');

/* configuration routes */

Route::post('/config/set','ConfigurationController@set');
Route::post('/config/get','ConfigurationController@get');

/* auth */
Route::post('/login','AuthController@login');
Route::post('/register','AuthController@register');

