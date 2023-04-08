<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Master\CityController;
use App\Http\Controllers\Master\BussinessRegController;
use App\Http\Controllers\Master\CorporationController;
use App\Http\Controllers\Master\EmployeeController;
use App\Http\Controllers\Master\TypeOfBussinessController;
use App\Http\Controllers\Master\TypeOfLicenceController;
use App\Http\Controllers\Serve\NewServecontroller;
use App\Http\Controllers\Serve\ExistingServeController;
use App\Http\Controllers\PrintController;



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

Route::get('city',[CityController::class,'index'])->name('city');
Route::post('cityinsert',[CityController::class,'create'])->name('cityinsert');
Route::get('citydelete/{id}',[CityController::class,'delete'])->name('citydelete');
Route::get('cityedit/{id}',[CityController::class,'edit'])->name('cityedit');
Route::post('cityupdate',[CityController::class,'update'])->name('cityupdate');


Route::get('bussiness',[BussinessRegController::class,'index'])->name('bussiness');
Route::post('bussinessinsert',[BussinessRegController::class,'create'])->name('bussinessinsert');
Route::get('bussinessdelete/{id}',[BussinessRegController::class,'delete'])->name('bussinessdelete');
Route::get('bussinessedit/{id}',[BussinessRegController::class,'edit'])->name('bussinessedit');
Route::post('bussinessupdate',[BussinessRegController::class,'update'])->name('bussinessupdate');



Route::get('corporation',[CorporationController::class,'index'])->name('corporation');
Route::post('corporationinsert',[CorporationController::class,'create'])->name('corporationinsert');
Route::get('corporationdelete/{id}',[CorporationController::class,'delete'])->name('corporationdelete');
Route::get('corporationedit/{id}',[CorporationController::class,'edit'])->name('corporationedit');
Route::post('corporationupdate',[CorporationController::class,'update'])->name('corporationupdate');

Route::get('employee',[EmployeeController::class,'index'])->name('employee');
Route::post('employeeinsert',[EmployeeController::class,'create'])->name('employeeinsert');
Route::get('employeedelete/{id}',[EmployeeController::class,'delete'])->name('employeedelete');
Route::get('employeeedit/{id}',[EmployeeController::class,'edit'])->name('employeeedit');
Route::post('employeeupdate',[EmployeeController::class,'update'])->name('employeeupdate');


Route::get('typeofbussiness',[TypeOfBussinessController::class,'index'])->name('typeofbussiness');
Route::post('typeofbussinessinsert',[TypeOfBussinessController::class,'create'])->name('typeofbussinessinsert');
Route::get('typeofbussinessdelete/{id}',[TypeOfBussinessController::class,'delete'])->name('typeofbussinessdelete');
Route::get('typeofbussinessedit/{id}',[TypeOfBussinessController::class,'edit'])->name('typeofbussinessedit');
Route::post('typeofbussinessupdate',[TypeOfBussinessController::class,'update'])->name('typeofbussinessupdate');

Route::get('typeoflicence',[TypeOfLicenceController::class,'index'])->name('typeoflicence');
Route::post('typeoflicenceinsert',[TypeOfLicenceController::class,'create'])->name('typeoflicenceinsert');
Route::get('typeoflicencedelete/{id}',[TypeOfLicenceController::class,'delete'])->name('typeoflicencedelete');
Route::get('typeoflicenceedit/{id}',[TypeOfLicenceController::class,'edit'])->name('typeoflicenceedit');
Route::post('typeoflicenceupdate',[TypeOfLicenceController::class,'update'])->name('typeoflicenceupdate');


Route::get('newserve',[NewServecontroller::class,'index'])->name('newserve');
Route::post('newserveinsert',[NewServecontroller::class,'create'])->name('newserveinsert');
Route::get('newservedelete/{id}',[NewServecontroller::class,'delete'])->name('newservedelete');
Route::get('newserveedit/{id}',[NewServecontroller::class,'edit'])->name('newserveedit');
Route::post('newserveupdate',[NewServecontroller::class,'update'])->name('newserveupdate');
Route::get('edit_existing/{id}',[NewServecontroller::class,'edit_existing'])->name('edit_existing');
Route::post('update_existing',[NewServecontroller::class,'update_existing'])->name('update_existing');
Route::get('delete_existing/{id}',[NewServecontroller::class,'delete_existing'])->name('delete_existing');





Route::get('showserve',[NewServecontroller::class,'showserve'])->name('showserve');

Route::get('existingserve',[ExistingServeController::class,'existingserveform'])->name('existingserve');
Route::post('existingserveinsert',[ExistingServeController::class,'create'])->name('existingserveinsert');
Route::get('get_form_data',[ExistingServeController::class,'get_form_data'])->name('get_form_data');

Route::get('get_busnes',[NewServecontroller::class,'get_busnes'])->name('get_busness');

Route::get('get_licence_id',[NewServecontroller::class,'get_licence'])->name('get_licence_id');
Route::get('get_estab',[ExistingServeController::class,'get_estab'])->name('get_estab');


//  Route::view('/print1','print.new_survey_print');

Route::get('print/{id}',[PrintController::class,'print'])->name('print');
