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

                                    Optimalkan data di [Nama Website]. Butuh bantuan? Kami siap. Selamat bekerja!

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
                <?php for ($i = 0; $i <= 5; $i++) : ?>
                    <div class="card mb-2">
                        <div class="card-body ">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-1">
                                        <input type="checkbox">
                                    </div>
                                    <div class="col text-start">
                                        Judul Artikel
                                    </div>
                                    <div class="col text-end">
                                        21 February 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
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