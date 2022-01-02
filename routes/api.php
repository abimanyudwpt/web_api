<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\SiswaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', [AuthController::class, 'login']);
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('siswa', SiswaController::class);
    Route::post('/siswa/{id}', [SiswaController::class, 'update']);
});

// Route::get('kelas', [SiswaController::class, 'kelas']);
// Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);