<?php

use App\Http\Controller;

use App\ModelLED\ModelLEDCover;
use App\ModelMasterProdi;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('items', function(){
    return ModelLEDCover::all();
});

Route::get('items/{tes}', function($id){
    return ModelLEDCover::find($id);
});

Route::get('cek/{yo}', function(ModelMasterProdi $yo){
    return $yo;
});
Route::get('yo','API@index');

