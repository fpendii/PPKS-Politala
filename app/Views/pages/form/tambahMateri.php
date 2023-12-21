<div class="container-xxl p-2">
    <div class=".container text-center">
        <div class="row">
            <div class="col-7 text-start ps-5">
                <h1 class="fs-1">Tambah Materi</h1>
                <?php if (session()->getFlashdata('errors')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?php echo session()->getFlashdata('errors') ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <form action="/manajement-materi/simpan-materi" method="post">
                    <div class="mb-3">
                        <label for="judul_materi" class="form-label">Judul Materi</label>
                        <input type="text" autofocus class="form-control" id="judul_materi" name="judul_materi" value="<?php echo old('judul') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="link_document" class="form-label">Link Document</label>
                        <input type="text" autofocus class="form-control" id="link_document" name="link_document" value="<?php echo old('judul') ?>">
                    </div>
                    <a href="/manajement-galeri" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <div class="col">

            </div>

        </div>
    </div>
</div>