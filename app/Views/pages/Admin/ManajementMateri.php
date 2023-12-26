<div class="container-fluid border pb-4">
    <div class="card text-start mb-5">
        <div class="card-header">
            Halaman
        </div>
        <div class="card-body">
            <h5 class="card-title">Manajament Materi</h5>
            <div class="text-end">
                <a href="/manajement-materi/tambah-materi" class="btn btn-success">Tambah Materi</a>
            </div>

        </div>
        <div class="card-footer text-body-secondary">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-primary" role="alert">
                    <?php echo session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <table class="table table-hover">
        <thead></thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Materi</th>
            <th scope="col">Link Materi</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($materi as $rowMateri) : ?>
                <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo $rowMateri['judul_materi'] ?></td>
                    <td class="col-5"><a class="text-primary" href="<?php echo $rowMateri['link_document'] ?>" target="_blank"><?php echo $rowMateri['link_document'] ?></a></td>
                    <td class="col-2"><?php echo $rowMateri['tanggal_dibuat'] ?></td>
                    <td class="col-2">
                        <form action="/manajement-materi/edit-materi/<?php echo $rowMateri['id_materi'] ?>" method="post" class="d-inline">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                        <form action="/manajement-materi/delete-materi/<?php echo $rowMateri['id_materi'] ?>" method="post" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>