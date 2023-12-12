<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ROUTES User
$routes->get('/', 'BerandaController::beranda');
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


// ROUTES Admin
$routes->get('/beranda admin', 'BerandaAdminController::BerandaAdmin');
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
// Admin/Manajement Program
$routes->get('manajement-program','ManajementProgram::ManajementProgram');
$routes->delete('manajement-program/delete/(:num)','ManajementProgram::DeleteProgram/$1');


// ROUTES PEGAWAI
$routes->get('/pegawai', 'Pages::laporanPengguna');
$routes->get('/Galeri Pegawai', 'Pages::galeriPegawai');
$routes->get('/laporan pengguna', 'Pages::laporanPengguna');
$routes->get('/Artikel pegawai', 'Pages::artikelPegawai');
$routes->get('/Pengaduan pegawai', 'Pages::pengaduanPegawai');
