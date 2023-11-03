<?php

use App\Http\Controllers\FabricationScheduleController;
use App\Http\Controllers\GanttController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Route::get('gantt/{fabricationSchedule}', [FabricationScheduleController::class, 'show'])->name('get.gantt');
Route::get('/data', [GanttController::class, 'get'])->name('get.gantt');
