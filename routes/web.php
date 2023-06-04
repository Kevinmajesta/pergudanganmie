<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbProdukController;
use App\Http\Controllers\TbSupirController;
use App\Http\Controllers\TbUserController;
use App\Http\Controllers\TbBarangkeluarController;
use App\Http\Controllers\TbOutletController;
use App\Http\Controllers\TbGudangController;
use App\Http\Controllers\TbRuteController;
use App\Http\Controllers\TbPegawaiController;
use App\Http\Controllers\TbBarangmasukController;
use App\Http\Controllers\TbComplainController;
use App\Http\Controllers\TbEkspedisiController;
use App\Http\Controllers\TbPembayaranController;
use App\Http\Controllers\TbPengirimannController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'home'])->name('home');
//CRUD Produk

Route::get('/produk', [TbProdukController::class, 'index'])->name('produkk');
Route::get('/produk-tambah', [TbProdukController::class, 'tambah']);
Route::post('/produk-insert', [TbProdukController::class, 'insert']);

Route::get('/produk-edit/{id}', [TbProdukController::class, 'edit']);
Route::post('/produk-update/{id}', [TbProdukController::class, 'update']);

Route::get('/produk-delete/{id}', [TbProdukController::class,'delete']);
Route::get('/produk-export/{id}', [TbProdukController::class,'export']);

//CRUD Supir
Route::get('/supir', [TbSupirController::class, 'index'])->name('supirr');
Route::get('/supir-tambah', [TbSupirController::class, 'tambah']);
Route::post('/supir-insert', [TbSupirController::class, 'insert']);

Route::get('/supir-edit/{id}', [TbSupirController::class, 'edit']);
Route::post('/supir-update/{id}', [TbSupirController::class, 'update']);

Route::get('/supir-delete/{id}', [TbSupirController::class,'delete']);
Route::get('/supir-export/{id}', [TbSupirController::class,'export']);


//CRUD User
Route::get('/user', [TbUserController::class, 'index'])->name('userr');
Route::get('/user-tambah', [TbUserController::class, 'tambah']);
Route::post('/user-insert', [TbUserController::class, 'insert']);

Route::get('/user-edit/{id}', [TbUserController::class, 'edit']);
Route::post('/user-update/{id}', [TbUserController::class, 'update']);

Route::get('/user-delete/{id}', [TbUserController::class,'delete']);
Route::get('/user-export/{id}', [TbUserController::class,'export']);

//CRUD Barang Keluar
Route::get('/keluar', [TbBarangkeluarController::class, 'index'])->name('keluarr');
Route::get('/keluar-tambah', [TbBarangkeluarController::class, 'tambah']);
Route::post('/keluar-insert', [TbBarangkeluarController::class, 'insert']);

Route::get('/keluar-edit/{id}', [TbBarangkeluarController::class, 'edit']);
Route::post('/keluar-update/{id}', [TbBarangkeluarController::class, 'update']);

Route::get('/keluar-delete/{id}', [TbBarangkeluarController::class,'delete']);
Route::get('/keluar-export/{id}', [TbBarangkeluarController::class,'export']);

//CRUD Barang Masuk
Route::get('/masuk', [TbBarangmasukController::class, 'index'])->name('masukk');
Route::get('/masuk-tambah', [TbBarangmasukController::class, 'tambah']);
Route::post('/masuk-insert', [TbBarangmasukController::class, 'insert']);

Route::get('/masuk-edit/{id}', [TbBarangmasukController::class, 'edit']);
Route::post('/masuk-update/{id}', [TbBarangmasukController::class, 'update']);

Route::get('/masuk-delete/{id}', [TbBarangmasukController::class,'delete']);
Route::get('/masuk-export/{id}', [TbBarangmasukController::class,'export']);

//CRUD Outlet
Route::get('/outlet', [TbOutletController::class, 'index'])->name('outlett');
Route::get('/outlet-tambah', [TbOutletController::class, 'tambah']);
Route::post('/outlet-insert', [TbOutletController::class, 'insert']);

Route::get('/outlet-edit/{id}', [TbOutletController::class, 'edit']);
Route::post('/outlet-update/{id}', [TbOutletController::class, 'update']);

Route::get('/outlet-delete/{id}', [TbOutletController::class,'delete']);
Route::get('/outlet-export/{id}', [TbOutletController::class,'export']);


//CRUD Gudang
Route::get('/gudang', [TbGudangController::class, 'index'])->name('gudangg');
Route::get('/gudang-tambah', [TbGudangController::class, 'tambah']);
Route::post('/gudang-insert', [TbGudangController::class, 'insert']);

Route::get('/gudang-edit/{id}', [TbGudangController::class, 'edit']);
Route::post('/gudang-update/{id}', [TbGudangController::class, 'update']);

Route::get('/gudang-delete/{id}', [TbGudangController::class,'delete']);
Route::get('/gudang-export/{id}', [TbGudangController::class,'export']);

//CRUD Rute
Route::get('/rute', [TbRuteController::class, 'index'])->name('rutee');
Route::get('/rute-tambah', [TbRuteController::class, 'tambah']);
Route::post('/rute-insert', [TbRuteController::class, 'insert']);

Route::get('/rute-edit/{id}', [TbRuteController::class, 'edit']);
Route::post('/rute-update/{id}', [TbRuteController::class, 'update']);

Route::get('/rute-delete/{id}', [TbRuteController::class,'delete']);
Route::get('/rute-export/{id}', [TbRuteController::class,'export']);

//CRUD Pegawai
Route::get('/pegawai', [TbPegawaiController::class, 'index'])->name('pegawaii');
Route::get('/pegawai-tambah', [TbPegawaiController::class, 'tambah']);
Route::post('/pegawai-insert', [TbPegawaiController::class, 'insert']);

Route::get('/pegawai-edit/{id}', [TbPegawaiController::class, 'edit']);
Route::post('/pegawai-update/{id}', [TbPegawaiController::class, 'update']);

Route::get('/pegawai-delete/{id}', [TbPegawaiController::class,'delete']);
Route::get('/pegawai-export/{id}', [TbPegawaiController::class,'export']);

//CRUD Complain
Route::get('/complain', [TbComplainController::class, 'index'])->name('complainn');
Route::get('/complain-tambah', [TbComplainController::class, 'tambah']);
Route::post('/complain-insert', [TbComplainController::class, 'insert']);

Route::get('/complain-edit/{id}', [TbComplainController::class, 'edit']);
Route::post('/complain-update/{id}', [TbComplainController::class, 'update']);

Route::get('/complain-delete/{id}', [TbComplainController::class,'delete']);
Route::get('/complain-export/{id}', [TbComplainController::class,'export']);


//CRUD Ekspedisi
Route::get('/ekspedisi', [TbEkspedisiController::class, 'index'])->name('ekspedisii');
Route::get('/ekspedisi-tambah', [TbEkspedisiController::class, 'tambah']);
Route::post('/ekspedisi-insert', [TbEkspedisiController::class, 'insert']);

Route::get('/ekspedisi-edit/{id}', [TbEkspedisiController::class, 'edit']);
Route::post('/ekspedisi-update/{id}', [TbEkspedisiController::class, 'update']);

Route::get('/ekspedisi-delete/{id}', [TbEkspedisiController::class,'delete']);
Route::get('/ekspedisi-export/{id}', [TbEkspedisiController::class,'export']);



//CRUD Pembayaran
Route::get('/pembayaran', [TbPembayaranController::class, 'index'])->name('pembayarann');
Route::get('/pembayaran-tambah', [TbPembayaranController::class, 'tambah']);
Route::post('/pembayaran-insert', [TbPembayaranController::class, 'insert']);

Route::get('/pembayaran-edit/{id}', [TbPembayaranController::class, 'edit']);
Route::post('/pembayaran-update/{id}', [TbPembayaranController::class, 'update']);

Route::get('/pembayaran-delete/{id}', [TbPembayaranController::class,'delete']);
Route::get('/pembayaran-export/{id}', [TbPembayaranController::class,'export']);

//CRUD Pengiriman
Route::get('/pengiriman', [TbPengirimannController::class, 'index'])->name('pengirimann');
Route::get('/pengiriman-tambah', [TbPengirimannController::class, 'tambah']);
Route::post('/pengiriman-insert', [TbPengirimannController::class, 'insert']);

Route::get('/pengiriman-edit/{id}', [TbPengirimannController::class, 'edit']);
Route::post('/pengiriman-update/{id}', [TbPengirimannController::class, 'update']);

Route::get('/pengiriman-delete/{id}', [TbPengirimannController::class,'delete']);
Route::get('/pengiriman-export/{id}', [TbPengirimannController::class,'export']);