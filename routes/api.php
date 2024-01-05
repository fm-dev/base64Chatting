<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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
Route::middleware('api')->group(function () {
    // ... route API lainnya

    // Nonaktifkan CSRF untuk route tertentu
    Route::post('/registrasi', [MessageController::class, 'registrasiPengguna'])->withoutMiddleware(['csrf']);
    Route::get('/pesan',[MessageController::class, 'index']);
    Route::post('/login',[MessageController::class, 'login'])->withoutMiddleware(['csrf']);
    Route::post('/storePesan',[MessageController::class, 'storePesan'])->withoutMiddleware(['csrf']);
    Route::post('/enkripsi',[MessageController::class, 'enkripsiText'])->withoutMiddleware(['csrf']);
    Route::post('/dekripsi',[MessageController::class, 'dekripsiText'])->withoutMiddleware(['csrf']);
});

