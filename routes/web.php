<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\listSepedaMotor;
use App\Http\Controllers\listSalesPerformannce;
use App\Http\Controllers\listFinance;
use App\Http\Controllers\llistPembayaran4;
use App\Http\Controllers\listLokasi;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\StokController;
use App\Http\Controller\GrafikDashboardController;
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
Route::get('/penjualan/addData', [ExcelController::class, 'getFormAddData'])->name('addDataExcel');
Route::post('/penjualan/importData', [ExcelController::class, 'importData'])->name('importData');
Route::get('/test', [StokController::class, 'getSisaStok'])->name('sisaStok');

//Stok
Route::get('/stok/addData', [StokController::class, 'getImportForm'])->name('getStokUploadForm');
Route::post('/stok/importData', [StokController::class, 'prosesImport'])->name('importStokData');
Route::get('/stok/showData', [StokController::class, 'showAllData'])->name('showDataStok');
Route::get('/stok/ambilData', [StokController::class, 'getDateForm'])->name('ambilDataStok');
Route::post('/stok/proses', [StokController::class, 'getStokByDate'])->name('prosesDataStok');

//Dashboard dan Komponen Pendukung
Route::get('/', [ExcelController::class, 'dashboard'])->name('dashboard');
Route::get('/aboutUs', [ExcelController::class, 'aboutUs'])->name('tentang');
Route::get('/data', [ExcelController::class, 'data'])->name('pilihData');

//Get Transaction
Route::get('/transaksi/showData', [ExcelController::class, 'showData'])->name('lihatData');
Route::get('/transaksi/ambilDataByDate', [ExcelController::class, 'getFormTransactionDataByDate'])->name('formByDate');
Route::any('transaksi/prosesDataByDate', [ExcelController::class, 'showDataByDate'])->name('hasilData');
Route::get('/transaksi/ambilDataGrafik', [TransactionController::class, 'getForm'])->name('formGrafikByDate');
Route::post('/transaksi/prosesDataGrafik', [TransactionController::class, 'getDateTransactionData'])->name('grafikByDate');
Route::get('/transaksi/ambilDataAll', [TransactionController::class, 'getAllTransactionData'])->name('getAllTransactionData');

//Get Form dan Pemrosesan Data List Sepeda Motor
Route::get('/listMotor/pilihTanggal', [listSepedaMotor::class, 'getFormTanggal'])->name('pilihTanggalMotor');
Route::post('/listMotor/prosesDataSepedaMotor', [listSepedaMotor::class, 'prosesTanggal'])->name('prosesDataMotor');
Route::get('/listMotor/allData', [listSepedaMotor::class, 'getSeluruhData'])->name('getAllMotorData');

//Get Form dan Pemrosesan List Sales
Route::get('/listSales/pilihTanggal', [listSalesPerformannce::class, 'getFormTanggal'])->name('pilihTanggalSales');
Route::post('/listSales/prosesDataSales', [listSalesPerformannce::class, 'prosesTanggal'])->name('prosesDataSales');
Route::get('/listSales/allData', [listSalesPerformannce::class, 'getSeluruhData'])->name('getAllSalesData');

//Get Form dan Pemrosesan List Perusahaan Finance
Route::get('/listFinance/pilihTanggal', [listFinance::class, 'getFormTanggal'])->name('pilihTanggalFinance');
Route::post('/listFinance/prosesDataFinance', [listFinance::class, 'prosesTanggal'])->name('prosesDataFinance');
Route::get('/listFinance/allData', [listFinance::class, 'getSeluruhData'])->name('getAllFinance');

//Get Form dan Pemrosesan List Moda Pembayaran
Route::get('/listPembayaran/pilihTanggal', [llistPembayaran4::class, 'getFormTanggal'])->name('pilihTanggalPembayaran');
Route::post('/listPembayaran/prosesDataPembayaran', [llistPembayaran4::class, 'prosesTanggal'])->name('prosesDataPembayaran');
Route::get('/listPembayaran/allData', [llistPembayaran4::class, 'getSeluruhData'])->name('getAllPembayaran');

//Lokasi
Route::get('/lokasi/ambilData', [listLokasi::class, 'getForm'])->name('ambilTanggalLokasi');
Route::post('/lokasi/prosesLokasiKota', [listLokasi::class, 'proses'])->name('prosesTanggalLokasi');
Route::get('/lokasi/ambilDataKecamatan', [listLokasi::class, 'getFormKecamatan'])->name('ambilTanggalLokasiKecamatan');
Route::post('/lokasi/prosesLokasiKecamatab', [listLokasi::class, 'getLokasiByKecamatan'])->name('prosesTanggalLokasiKecamatan');



