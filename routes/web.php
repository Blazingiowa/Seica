<?php

use App\Http\Controllers\Seica\CourseSubjectController;
use App\Http\Controllers\Seica\MasterController;
use App\Http\Controllers\Seica\ProfileController;
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

    /*科目*/
    Route::get('/course/register',[CourseSubjectController::class,'CourseSubjectRegister']);
    Route::post('/course/register',[CourseSubjectController::class,'CourseSubjectRegister']);
    Route::get('/course/delete/{id}',[CourseSubjectController::class,'CourseSubjectDelete']);
    Route::get('/course/edit/{id}',[CourseSubjectController::class,'CourseSubjectEdit']);
    Route::post('/course/edit/{id}',[CourseSubjectController::class,'CourseSubjectEdit']);


    /*アカウント情報*/
    Route::get('/profile',[ProfileController::class,'AccountMaster']);
});
