<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EmployeeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('employees')->group(function () {
    Route::get('/',[ EmployeeController::class, 'index']);
    Route::post('/',[ EmployeeController::class, 'store']);
    Route::delete('/{id}',[ EmployeeController::class, 'destroy']);
    Route::get('/{id}',[ EmployeeController::class, 'show']);
    Route::put('/{id}',[ EmployeeController::class, 'update']);
    Route::get('/search/{search}',[ EmployeeController::class, 'search']);
    Route::get('/paginate/{elements}',[ EmployeeController::class, 'pagination']);
    Route::get('/search/{search}/{elements}',[ EmployeeController::class, 'searchPaginate']);
});



