<div class="container-fluid border">
    <div class="container pt-4">
        <div class="row text-end">
            <div class="container text-center">
                <div class="row mb-4">
                    <div class="col">
                        <div class="card text-start" style="width: 30rem;">
                            <div class="card-body">
                                <h5 class="card-title">Selamat datang, Admin!</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Beranda Admin</h6>
                                <p class="card-text">

                                    Optimalkan data di PPKS Politala. Butuh bantuan? Kami siap. Selamat bekerja!

                                </p>
                                <p>Tim PPKS Politala</p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-start">
                        <h4 class="card-text">Keluhan Hari ini</h4>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold"><?php echo substr($pengaduan[0]['keluhan'], 0, 30) . " ..." ?></div>
                                    <p><?php echo $pengaduan[0]['tanggal_dibuat'] ?></p>
                                </div>
                                <span class="badge bg-primary rounded-pill"><?php echo $pengaduan[0]['no_hp'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold"><?php echo substr($pengaduan[3]['keluhan'], 0, 30) . " ..." ?></div>
                                    <p><?php echo $pengaduan[1]['tanggal_dibuat'] ?></p>
                                </div>
                                <span class="badge bg-primary rounded-pill"><?php echo $pengaduan[1]['no_hp'] ?></span>
                            </li>
                        </ol>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-9 border shadow p-3 mb-5 bg-body-tertiary rounded">
                <h5 class="card-title text-start mb-4">Artikel Terbaru</h5>
                <?php foreach ($artikel as $rowArtikel) : ?>
                    <div class="card mb-2">
                        <div class="card-body ">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                        </svg>
                                    </div>
                                    <div class="col text-start">
                                        <?php echo $rowArtikel['judul'] ?>
                                    </div>
                                    <div class="col text-end">
                                        <?php echo $rowArtikel['tanggal_dibuat'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col border shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Daftar Pengguna</h5>
                        </div>
                    </a>
                    <?php foreach ($pengguna as $rowPengguna) : ?>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?php echo $rowPengguna['username'] ?></h5>
                                <small class="text-body-secondary"><?php echo $rowPengguna['level'] ?></small>
                            </div>
                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                            <small class="text-body-secondary">And some muted small print.</small>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>