<?php

use App\Http\Controllers\Seica\CourseSubjectController;
use App\Http\Controllers\Seica\MasterController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function (){
    Route::get('/master',[MasterController::class,'MasterOfFront']);
    Route::get('/my_logout',[MasterController::class,'logout']);

    /*科目一覧*/
    Route::get('/course/list',[CourseSubjectController::class,'CourseSubjectList']);

    /*科目登録*/
    Route::get('/course/register',[CourseSubjectController::class,'CourseSubjectRegister']);
    Route::post('/course/register',[CourseSubjectController::class,'CourseSubjectRegister']);
});
