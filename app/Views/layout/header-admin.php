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
    <link rel="stylesheet" href="/css/manajament-profil.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary z-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PPKS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="beranda-admin">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Manajement <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-artikel') ?>">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-profil') ?>">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-galeri') ?>">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-materi') ?>">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-program') ?>">Program</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="manajement-akun" class="btn" type="submit">Account</a>
                </form>
                <form class="d-flex">
                    <a href="/logout" class="btn" type="submit">Logout</a>
                </form>
            </div>
        </div>
    </nav>
