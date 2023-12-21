<div class="container-xxl">
    <div class="container-xxl p-3">
        <div class="row">
            <div class="col">
                <h1>Tambah Program</h1>
                <?php if (session()->getFlashdata('errors')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?php echo session()->getFlashdata('errors') ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif ?>
                <form action="/manajement-program/simpan-program" method="post">
                    <div class="mb-3">
                        <label for="uraian" class="form-label">Uraian Program</label>
                        <input type="text" class="form-control" id="uraian" name="uraian">
                    </div>
                    <div class="mb-3">
                        <label for="penyelenggara" class="form-label">Penyelenggara</label>
                        <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="waktu" name="waktu">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

</div>