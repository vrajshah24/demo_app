<?php

use Illuminate\Support\Facades\Route;
use App\Models\user_info;
use App\Http\Controllers\UserController;
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
    return view('home');
});

// Route::get('/data', function () {
//     $data = user_info::all();
//     return $data;
// });

Route::get('/data', [UserController::class,'getData']);

Route::get('/edit/{id}', function ($id) {
    $data = user_info::find($id);
    return $data;
});

Route::get('/delete/{id}', function ($id) {
    $data = user_info::destroy($id);
    return $data;
});

Route::post('/editData',[UserController::class,'editData']);

Route::post('/addData',[UserController::class,'insertData']);