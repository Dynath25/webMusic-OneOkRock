<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UASController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

Route::get('Home', [UASController::class, 'home']);
Route::get('Songs', [UASController::class, 'songs']);
Route::get('About', [UASController::class, 'about']);


Route::get('/Tambah', [UASController::class, 'tambah']);
Route::post('/store', [UASController::class, 'store']);
Route::post('/update', [UASController::class, 'update']);
Route::get('/Edit/{id}', [UASController::class, 'edit']);
Route::get('/Hapus/{id}', [UASController::class, 'hapus']);


Route::get('info_Detox', [UASController::class, 'info_Detox']);
Route::get('info_NicheSyn', [UASController::class, 'info_NicheSyn']);
Route::get('info_ZanRef', [UASController::class, 'info_ZanRef']);
Route::get('info_JXB', [UASController::class, 'info_JXB']);
Route::get('info_EOTS', [UASController::class, 'info_EOTS']);
Route::get('info_LuxDis', [UASController::class, 'info_LuxDis']);


Route::get('info_Ambitions', [UASController::class, 'ambitions']);








Route::get('WeAre', [UASController::class, 'WeAre']);