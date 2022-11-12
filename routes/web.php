<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController; 
use App\Http\Controllers\listSepedaMotor;

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

//Import dan Show keseluruhan data
Route::get('/addData', [ExcelController::class, 'getFormAddData'])->name('addDataExcel');
Route::post('/importData', [ExcelController::class, 'importData'])->name('importData');
Route::get('/showData', [ExcelController::class, 'showData']);

//Get Form dan Pemrosesan Data List Sepeda Motor
Route::get('/pilihTanggal', [listSepedaMotor::class, 'getFormTanggal'])->name('pilihTanggal');
Route::post('/prosesDataSepedaMotor', [listSepedaMotor::class, 'prosesTanggal'])->name('prosesData');
