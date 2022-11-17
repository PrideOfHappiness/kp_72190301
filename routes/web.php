<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\listSepedaMotor;
use App\Http\Controllers\listSalesPerformannce;
use App\Http\Controllers\listFinance;
use App\Http\Controllers\llistPembayaran4;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Import dan Show keseluruhan data
Route::get('/addData', [ExcelController::class, 'getFormAddData'])->name('addDataExcel');
Route::post('/importData', [ExcelController::class, 'importData'])->name('importData');
Route::get('/showData', [ExcelController::class, 'showData'])->name('lihatData');
Route::get('/', [ExcelController::class, 'dashboard'])->name('dashboard');

//Get Form dan Pemrosesan Data List Sepeda Motor
Route::get('/listMotor/pilihTanggal', [listSepedaMotor::class, 'getFormTanggal'])->name('pilihTanggalMotor');
Route::post('/listMotor/prosesDataSepedaMotor', [listSepedaMotor::class, 'prosesTanggal'])->name('prosesDataMotor');
Route::get('/listMotor/allData', [listSepedaMotor::class, 'getSeluruhData'])->name('getAllMotorData');

//Get Form dan Pemrosesan List Sales
Route::get('/listSales/pilihTanggal', [listSalesPerformannce::class, 'getFormTanggal'])->name('pilihTanggalSales');
Route::post('/listSales/prosesDataSales', [listSalesPerformannce::class, 'prosesTanggal'])->name('prosesDataSales');

//Get Form dan Pemrosesan List Perusahaan Finance
Route::get('/listFinance/pilihTanggal', [listFinance::class, 'getFormTanggal'])->name('pilihTanggalFinance');
Route::post('/listFinance/prosesDataFinance', [listFinance::class, 'prosesTanggal'])->name('prosesDataFinance');

//Get Form dan Pemrosesan List Moda Pembayaran
Route::get('/listPembayaran/pilihTanggal', [llistPembayaran4::class, 'getFormTanggal'])->name('pilihTanggalPembayaran');
Route::post('/listPembayaran/prosesDataPembayaran', [llistPembayaran4::class, 'prosesTanggal'])->name('prosesDataPembayaran');



