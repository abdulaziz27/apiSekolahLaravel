<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\UserController;


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

// Route::post('login', [UserController::class, 'login'])->name('login');
// Route::post('register', [UserController::class, 'register']);

// Route::group(['middleware' => ['auth:api']], function () {
//     Route::get('user/detail', [UserController::class, 'details']);
//     Route::post('logout', [UserController::class, 'logout']);
// });
Route::resource('/murid', MuridController::class);



