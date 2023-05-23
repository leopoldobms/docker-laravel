<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\DB;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('client/create1/', function () {
//   dd(DB::select('select * from client'));
//   return view('welcome');
// });

Route::get('client/consult/{id}', ([clientController::class, 'consult']))->name('client.consult'); //consult clientes banco

Route::post('client/create/', ([clientController::class, 'create']))->name('client.create'); //create clientes banco

Route::post('client/update/{id}', ([clientController::class, 'update']))->name('client.update'); //update clientes banco

Route::post('client/delete/{id}', ([clientController::class, 'delete']))->name('delete'); //delete cliente pelo id no banco
