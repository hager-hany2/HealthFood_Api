<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ProductsControllerResource;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/subject', function () {
//    return view('subject');
//});

Route::group(['middleware'=>'ChangeLang'],function (){
    Route::post('/register',RegisterController::class);
    Route::post('/login',LoginController::class);

});
Route::post('/delete_item',DeleteController::class);
Route::resources([
    'products' => ProductsControllerResource::class,

]);
