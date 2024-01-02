<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
/** web.php is like a bridge while moving data from blade template to controllers or models */
/** To come to frontend */

Route::get('/', function () {
    return view('CRUD/create');
});

Route::post('store',[StudentController::class,'store']);
/** Route type post is only used when you pass data */

Route::get('show',[StudentController::class,'index']);

Route::get('edit/{id}',[StudentController::class,'edit']);

Route::post('update',[StudentController::class,'update']);

Route::get('delete/{id}',[StudentController::class,'delete']);

Route::get('show/{id}',[StudentController::class,'show']);

//Route::get('show',function (){
//   $students = Student::all();                   /** select * from users */
//   return view('CRUD/show',compact('students'));
////    return view('CRUD/show')
////        ->with([
////           'students' => $items                        /** 'variable_name_to_pass_to_view' => $variable_name_with _data */
////        ]);
//});
