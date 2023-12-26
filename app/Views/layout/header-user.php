<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $judul ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/css-public.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/galeri.css">
  <link rel="stylesheet" href="/css/profil.css">
</head>

<body>
  <div class="contaner-fluid">
    <div class="navbar">
      <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="container-fluid">
          <a class="navbar-brand" href="">PPKS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" id="navBeranda" aria-current="page" href="<?= base_url('/') ?>">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="profil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= base_url('/pengantar') ?>">Pengantar</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/struktur') ?>">Struktur Organisasi</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="<?= base_url('/sop') ?>">SOP</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/artikel') ?>">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('program') ?>">Program</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('laporkan') ?>">Laporkan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('tracking laporan') ?>tracking laporan">Tracking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/galeri photo') ?>">Galeri</a>
              </li>
            </ul>
            <form class="d-flex">
              <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
            </form>

          </div>
        </div>
      </nav>
    </div>
  </div>