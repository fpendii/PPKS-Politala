<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ROUTES User
$routes->get('/', 'BerandaController::beranda');
$routes->get('/beranda', 'BerandaController::beranda');
$routes->get('/admin', 'Pages::mPengaduan');
$routes->get('/artikel', 'Artikel::artikel');
$routes->get('/artikel/(:segment)', 'Artikel::detailArtikel/$1');
$routes->get('/profil', 'Pages::profil');
$routes->get('/program', 'ProgramController::program');
$routes->get('/tracking laporan', 'Pages::trackingLaporan');
$routes->get('/laporkan', 'Pages::laporkan');
$routes->get('/galeri photo', 'Galeri::galeri');
$routes->get('/pengantar', 'Profil::pengantar');
$routes->get('/struktur', 'Pages::strukturOrganisasi');
$routes->get('/sop', 'Pages::sop');
$routes->get('/login', 'Login::login');
$routes->post('/login/verifikasi-login', 'Login::verifikasiLogin');
$routes->get('/logout', 'Logout::logout');


// ROUTES Admin
$routes->get('/beranda-admin', 'BerandaAdminController::BerandaAdmin');
$routes->get('/manajement pengaduan', 'Pages::mPengaduan');
// Admin/Manajement Artikel
$routes->get('/manajement-artikel', 'ManajementArtikel::MajanementArtikel');
$routes->get('/manajement-artikel/(:segment)', 'ManajementArtikel::detailArtikel/$1');
$routes->get('/tambah-artikel','ManajementArtikel::TambahArtikel');
$routes->post('simpan_artikel','ManajementArtikel::SimpanArtikel');
$routes->delete('artikel/delete/(:num)','ManajementArtikel::HapusArtikel/$1');
$routes->post('manajement-artikel/edit/(:num)','ManajementArtikel::EditArtikel/$1');
$routes->post('manajement-artikel/edit/update/(:num)','ManajementArtikel::UpdatedArtikel/$1');
// Admin/Manajement Profil
$routes->get('/manajement-profil', 'ManajementProfil::ManajementProfil');
$routes->get('/manajement-profil/edit/(:segment)','ManajementProfil::EditProfil/$1');
$routes->post('manajement-profil/edit/simpan-profil/(:segment)', 'ManajementProfil::SimpanProfil/$1');
// Admin/Manajament Galeri
$routes->get('/manajement-galeri', 'ManajementGaleri::ManajementGaleri');
$routes->post('/simpan-galeri', 'ManajementGaleri::SimpanGaleri');
$routes->delete('manajement-galeri/delete/(:num)','ManajementGaleri::HapusGaleri/$1');    
// Admin/Manajement Akun
$routes->get('/manajement-akun', 'ManajementAkun::ManajementAkun');
$routes->post('/simpan-akun', 'ManajementAkun::SimpanAkun');
$routes->delete('manajement-akun/delete/(:num)','ManajementAkun::HapusAkun/$1');
$routes->post('manajement-akun/simpan-akun/(:num)','ManajementAkun::UpdateAkun/$1');
// Admin/Manajement Materi
$routes->get('/manajement-materi','ManajementMateri::ManajementMateri');
$routes->get('/manajement-materi/tambah-materi','ManajementMateri::TambahMateri');
$routes->post('/manajement-materi/simpan-materi','ManajementMateri::SimpanMateri');
$routes->post('/manajement-materi/edit-materi/(:num)','ManajementMateri::EditMateri/$1');
$routes->post('/manajement-materi/update-materi/(:num)','ManajementMateri::UpdateMateri/$1');
$routes->delete('/manajement-materi/delete-materi/(:num)','ManajementMateri::DeleteMateri/$1');
// Admin/Manajement Program
$routes->get('manajement-program','ManajementProgram::ManajementProgram');
$routes->get('manajement-program/tambah-program','ManajementProgram::TambahProgram');
$routes->post('manajement-program/simpan-program', 'ManajementProgram::SimpanProgram');
$routes->post('manajement-program/edit/(:num)', 'ManajementProgram::EditProgram/$1');
$routes->delete('manajement-program/delete/(:num)','ManajementProgram::DeleteProgram/$1');


// ROUTES PEGAWAI
$routes->get('/pegawai', 'Pages::laporanPengguna');
$routes->get('/Galeri Pegawai', 'Pages::galeriPegawai');
$routes->get('/laporan pengguna', 'Pages::laporanPengguna');
$routes->get('/Artikel pegawai', 'Pages::artikelPegawai');
$routes->get('/Pengaduan pegawai', 'Pages::pengaduanPegawai');
