<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/** web.php is like a bride while moving data from blade template to controllers or models */

Route::get('/', function () {
    return view('CRUD/create');
});

Route::post('store',[Controller::class,'store']);
