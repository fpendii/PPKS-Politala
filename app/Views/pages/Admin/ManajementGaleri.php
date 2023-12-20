<link rel="stylesheet" href="/css/galeri">

<!-- LINK CSSS ^ -->

<div class="container-fluid">
    <div class="card text-center">
        <div class="card-header">
            Galeri
        </div>
        <div class="card-body">
            <h5 class="card-title">Manajement Galeri</h5>
            <p class="card-text">Buatlah posting dengan galeri gambar untuk hari ini. Pastikan gambar yang diunggah relevan dan berkualitas. Terima kasih</p>
            <a href="/manajement-galeri/tambah-gambar" class="btn btn-success">
                Tambah
            </a>
        </div>
        <div class="card-footer text-body-secondary">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-primary" role="alert">
                    <?php echo session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galeri as $rowGaleri) : ?>
                <tr>
                    <td class="col-2"><img src="/img/<?php echo $rowGaleri['gambar'] ?>" style="width: 200px;" class="img-thumbnail" alt="<?php echo $rowGaleri['gambar'] ?>"></td>
                    <td><?php echo $rowGaleri['judul'] ?></td>
                    <td><?php echo $rowGaleri['tanggal_dibuat'] ?></td>
                    <td class="col-2">
                        <button type="button" class="btn btn-info d-inline" data-bs-toggle="modal" data-bs-target="#ModalGaleri<?php echo $rowGaleri['id_galeri'] ?>">Detail</button>

                        <!-- Modal -->
                        <div class="modal fade" id="ModalGaleri<?php echo $rowGaleri['id_galeri'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Gambar</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body mx-auto">
                                        <div class="card" style="width: 18rem;">
                                            <img src="/img/<?php echo $rowGaleri['gambar'] ?>" class="card-img-top" alt="<?php echo $rowGaleri['judul'] ?>">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $rowGaleri['judul'] ?></h5>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><?php echo $rowGaleri['tanggal_dibuat'] ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="manajement-galeri/delete/<?php echo $rowGaleri['id_galeri'] ?>" method="post" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger d-inline" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>