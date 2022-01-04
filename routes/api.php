<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestController;
use App\Http\Controllers\AnswerController;


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

Route::prefix('quests')->group(function () {
    Route::get('/l/', [QuestController::class, 'list']);
    Route::get('/i/{id}', [QuestController::class, 'info']);
    Route::post('/a/', [QuestController::class, 'add']);
});

Route::prefix('answers')->group(function () {
    Route::get('/l/{id}', [AnswerController::class, 'list']);
    Route::post('/a/', [AnswerController::class, 'add']);
});