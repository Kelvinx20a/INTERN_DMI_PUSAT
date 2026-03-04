<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProkerDMIController;
use App\Http\Controllers\HasilRapatKerjaController;
use App\Http\Controllers\AkustikMasjidController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RedaksiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PenataanOrganisasiController;


Route::get('/',[HomeController::class, 'index']);

Route::get('/Program Kerja/Program Kerja Dewan Masjid Indonesia',[ProkerDMIController::class, 'index']);
Route::get('/Program Kerja/Pengembangan Ekonomi dan Sosial',[ProkerDMIController::class, 'index2']);


Route::get('/Program Kerja/Hasil Rapat Kerja Nasional 2025',[HasilRapatKerjaController::class, 'index']);
Route::get('/Program Kerja/Akustik Masjid',[AkustikMasjidController::class, 'index']);
Route::get('/Program Kerja/Penataan Organisasi',[PenataanOrganisasiController::class, 'index']);

Route::get('/Tentang Kami/Pengurus',[PengurusController::class, 'index']);
Route::get('/Tentang Kami/Profil',[PengurusController::class, 'profil']);


Route::get('/Kegiatan/Event Bulan Ini',[KegiatanController::class, 'event']);
Route::get('/Kegiatan/Kalender Event',[KegiatanController::class, 'kalender']);
Route::get('/Kegiatan/Detail Event',[KegiatanController::class, 'detail']);


Route::get('/Redaksi/Berita',[BeritaController::class, 'berita']); 
Route::get('/Redaksi/Susunan Redaksi',[RedaksiController::class, 'susunanredaksi']); 