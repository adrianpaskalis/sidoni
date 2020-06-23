<?php

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
    return view('mainbefore');
});

Route::get('homebefore', function () {
    return view('mainbefore');
});

Route::get('homeafter', function () {
    return view('mainafter');
});
//laporan
Route::get('/laporan','LaporanController@index');

//donatur
Route::get('/donatur','DonaturController@index');
Route::get('/donatur/tambah','DonaturController@tambah');
Route::post('/donatur/store', 'DonaturController@store');
Route::get('/donatur/edit/{id}','DonaturController@edit');
Route::put('/donatur/update/{id}', 'DonaturController@update');
Route::get('/donatur/delete/{id}', 'DonaturController@delete');
Route::get('/donatur/find','DonaturController@find'); 
Route::get('/donatur/download-pdf','DonaturController@downloadPDF');
Route::get('/donatur/download-excel','DonaturController@downloadExcel');


//aktivitas 
Route::get('/aktivitas','AktivitasController@index');
Route::get('/aktivitas/tambah','AktivitasController@tambah');
Route::post('/aktivitas/store', 'AktivitasController@store');
Route::get('/aktivitas/edit/{id}','AktivitasController@edit');
Route::put('/aktivitas/update/{id}', 'AktivitasController@update');
Route::get('/aktivitas/delete/{id}', 'AktivitasController@delete');
Route::get('/aktivitas/find','AktivitasController@find'); 
Route::get('/aktivitas/download-pdf','AktivitasController@downloadPDF');

//kategoridonasi
Route::get('/kategori','KategoriDonasiController@index');
Route::get('/kategori/tambah','KategoriDonasiController@tambah');
Route::post('/kategori/store', 'KategoriDonasiController@store');
Route::get('/kategori/edit/{id}','KategoriDonasiController@edit');
Route::put('/kategori/update/{id}', 'KategoriDonasiController@update');
Route::get('/kategori/delete/{id}', 'KategoriDonasiController@delete');
Route::get('/kategori/find','KategoriDonasiController@find'); 



//Bank 
Route::get('/bank','BankController@index');
Route::get('/bank/tambah','BankController@tambah');
Route::post('/bank/store', 'BankController@store');
Route::get('/bank/edit/{id}','BankController@edit');
Route::put('/bank/update/{id}', 'BankController@update');
Route::get('/bank/delete/{id}', 'BankController@delete');
Route::get('/bank/find','BankController@find'); 
Route::get('/donatur/download-pdf','DonaturController@downloadPDF');

//Peserta
Route::get('/peserta','PesertaController@index');
Route::get('/peserta/tambah','PesertaController@tambah');
Route::post('/peserta/store', 'PesertaController@store');
Route::get('/peserta/edit/{id}','PesertaController@edit');
Route::put('/peserta/update/{id}', 'PesertaController@update');
Route::get('/peserta/delete/{id}', 'PesertaController@delete');
Route::get('/peserta/find','PesertaController@find'); 
Route::get('/peserta/download-pdf','PesertaController@downloadPDF');


Route::get('/transaksi','TransaksiController@index'); 
Route::get('/transaksi/tambah','TransaksiController@tambah');
Route::post('/transaksi/store', 'TransaksiController@store');
Route::get('/transaksi/edit/{id}','TransaksiController@edit');
Route::put('/transaksi/update/{id}', 'TransaksiController@update');
Route::get('/transaksi/delete/{id}', 'TransaksiController@delete');
Route::get('/transaksi/find','TransaksiController@find'); 
Route::get('/transaksi/download-pdf','TransaksiController@downloadPDF');


// chart controller 
Route::get('chart', 'ChartController@grafik');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
