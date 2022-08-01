<?php

use App\Http\Controllers\Microsite_counter;
use App\Http\Controllers\TestService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware'=>['ensureToken']], function () {

    Route::get('show', [Microsite_counter::class, 'show']);
    Route::post('insert', [Microsite_counter::class, 'insert']);
    

});

Route::get('test-config', [TestService::class, 'index']);
