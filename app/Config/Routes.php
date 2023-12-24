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
$routes->get('/struktur', 'StrukturOrganisasi::strukturOrganisasi');
$routes->get('/sop', 'Pages::sop');
$routes->get('/login', 'Login::login');
$routes->post('/login/verifikasi-login', 'Login::verifikasiLogin');
$routes->get('/logout', 'Logout::logout');


// ROUTES Admin

$routes->get('/beranda-admin', 'BerandaAdminController::BerandaAdmin',['filter' => 'isAdmin']);
// Admin/Manajement Artikel
$routes->get('/manajement-artikel', 'ManajementArtikel::MajanementArtikel',['filter' => 'isAdmin']);
$routes->get('/manajement-artikel/(:segment)', 'ManajementArtikel::detailArtikel/$1',['filter' => 'isAdmin']);
$routes->get('/tambah-artikel','ManajementArtikel::TambahArtikel',['filter' => 'isAdmin']);
$routes->post('simpan_artikel','ManajementArtikel::SimpanArtikel',['filter' => 'isAdmin']);
$routes->delete('artikel/delete/(:num)','ManajementArtikel::HapusArtikel/$1',['filter' => 'isAdmin']);
$routes->post('manajement-artikel/edit/(:num)','ManajementArtikel::EditArtikel/$1',['filter' => 'isAdmin']);
$routes->get('manajement-artikel/edit/(:num)','ManajementArtikel::EditArtikel/$1',['filter' => 'isAdmin']);
$routes->post('manajement-artikel/edit/update/(:num)','ManajementArtikel::UpdatedArtikel/$1',['filter' => 'isAdmin']);
// Admin/Manajement Profil
$routes->get('/manajement-profil', 'ManajementProfil::ManajementProfil',['filter' => 'isAdmin']);
$routes->get('/manajement-profil/edit/(:segment)','ManajementProfil::EditProfil/$1',['filter' => 'isAdmin']);
$routes->post('manajement-profil/simpan-profil', 'ManajementProfil::SimpanProfil/$1',['filter' => 'isAdmin']);
// Admin/Manajament Galeri
$routes->get('/manajement-galeri', 'ManajementGaleri::ManajementGaleri',['filter' => 'isAdmin']);
$routes->get('/manajement-galeri/tambah-gambar', 'ManajementGaleri::TambahGambar',['filter' => 'isAdmin']);
$routes->post('/manajement-galeri/simpan-gambar', 'ManajementGaleri::SimpanGaleri',['filter' => 'isAdmin']);
$routes->delete('manajement-galeri/delete/(:num)','ManajementGaleri::HapusGaleri/$1',['filter' => 'isAdmin']);    
// Admin/Manajement Akun
$routes->get('/manajement-akun', 'ManajementAkun::ManajementAkun',['filter' => 'isAdmin']);
$routes->post('/simpan-akun', 'ManajementAkun::SimpanAkun',['filter' => 'isAdmin']);
$routes->delete('manajement-akun/delete/(:num)','ManajementAkun::HapusAkun/$1',['filter' => 'isAdmin']);
$routes->post('manajement-akun/simpan-akun/(:num)','ManajementAkun::UpdateAkun/$1',['filter' => 'isAdmin']);
// Admin/Manajement Materi
$routes->get('/manajement-materi','ManajementMateri::ManajementMateri',['filter' => 'isAdmin']);
$routes->get('/manajement-materi/tambah-materi','ManajementMateri::TambahMateri',['filter' => 'isAdmin']);
$routes->post('/manajement-materi/simpan-materi','ManajementMateri::SimpanMateri',['filter' => 'isAdmin']);
$routes->post('/manajement-materi/edit-materi/(:num)','ManajementMateri::EditMateri/$1',['filter' => 'isAdmin']);
$routes->post('/manajement-materi/update-materi/(:num)','ManajementMateri::UpdateMateri/$1',['filter' => 'isAdmin']);
$routes->delete('/manajement-materi/delete-materi/(:num)','ManajementMateri::DeleteMateri/$1',['filter' => 'isAdmin']);
// Admin/Manajement Program
$routes->get('manajement-program','ManajementProgram::ManajementProgram',['filter' => 'isAdmin']);
$routes->get('manajement-program/tambah-program','ManajementProgram::TambahProgram',['filter' => 'isAdmin']);
$routes->post('manajement-program/simpan-program', 'ManajementProgram::SimpanProgram',['filter' => 'isAdmin']);
$routes->post('manajement-program/edit/(:num)', 'ManajementProgram::EditProgram/$1',['filter' => 'isAdmin']);
$routes->get('manajement-program/edit/(:num)', 'ManajementProgram::EditProgram/$1',['filter' => 'isAdmin']);
$routes->post('manajement-program/update/(:num)', 'ManajementProgram::UpdateProgram/$1',['filter' => 'isAdmin']);
$routes->delete('manajement-program/delete/(:num)','ManajementProgram::DeleteProgram/$1',['filter' => 'isAdmin']);


// ROUTES PEGAWAI
$routes->get('/pegawai', 'BerandaPegawaiController::LaporanPengguna');
$routes->get('/Galeri Pegawai', 'Pages::galeriPegawai');
$routes->get('/laporan pengguna', 'Pages::laporanPengguna');
$routes->get('/Artikel pegawai', 'Pages::artikelPegawai');
$routes->get('/Pengaduan pegawai', 'Pages::pengaduanPegawai');
