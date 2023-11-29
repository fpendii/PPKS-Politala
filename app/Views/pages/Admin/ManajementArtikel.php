<div class="container-fluid border pb-4">
    <div class="card text-center mb-5">
        <div class="card-header">
            Halaman
        </div>
        <div class="card-body">
            <h5 class="card-title">Manajament Artikel</h5>
            <p class="card-text">Tulislah sebuah artikel yang informatif dan menarik untuk hari ini, berikan wawasan dan informasi yang bermanfaat kepada pembaca</p>
            <a href="/tambah-artikel" class="btn btn-success">Tambah Artikel</a>
        </div>
        <div class="card-footer text-body-secondary">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-primary" role="alert">
                    <?php echo session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php foreach ($artikel as $rowArtikel) : ?>
        <!-- <a href="/manajement artikel/<?php echo $rowArtikel['id_artikel'] ?>"> -->
        <div class="card shadow p-3 mb-3 bg-body-tertiary rounded">
            <div class="card-header">
                Artikel
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $rowArtikel['judul'] ?></h5>
                <p class="card-text"><?php echo substr($rowArtikel['isi_artikel'], 0, 200) . "..." ?></p>
                <p style="font-size: 13px;"><?php echo $rowArtikel['tanggal_dibuat'] ?></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $rowArtikel['id_artikel'] ?>">
                    Detail
                </button>
                <form action="artikel/delete/<?php echo $rowArtikel['id_artikel'] ?>" method="post" class="d-inline">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick=" return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $rowArtikel['id_artikel'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Artikel</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $rowArtikel['judul'] ?></h5>
                                        <img src="/img/<?php echo $rowArtikel['gambar'] ?>" class="card-img-top" width="100px" alt="...">
                                        <p class="card-text"><?php echo $rowArtikel['isi_artikel'] ?></p>
                                        <p class="card-text"><small class="text-body-secondary"><?php echo $rowArtikel['tanggal_dibuat'] ?></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <form action="manajement-artikel/edit/<?php echo $rowArtikel['id_artikel'] ?>" method="post">
                                <button type="submit" class="btn btn-warning">Edit</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- </a> -->
    <?php endforeach; ?>
</div>