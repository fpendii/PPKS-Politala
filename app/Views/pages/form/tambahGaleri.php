<div class="container-xxl p-2">
    <div class=".container text-center">
        <div class="row">
            <div class="col-7 text-start ps-5">
                <h1 class="fs-1">Tambah Gambar</h1>
                <?php if (session()->getFlashdata('errors')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>
                            <?php echo session()->getFlashdata('errors') ?>
                        </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <form action="/manajement-galeri/simpan-gambar" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" autofocus class="form-control" id="judul" name="judul" value="<?php echo old('judul') ?>">
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Gambar</label>
                            <input class="form-control form-control-sm" id="inputFile" onchange="PreviewImage(event)" type="file" name="gambar">
                        </div>
                        <img id="preview" src="" class="img-fluid" alt="...">
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

<script>
    function PreviewImage(event) {
        var inputFile = event.target;
        var preview = document.getElementById('preview');

        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // Tampilkan gambar yang dipilih dalam elemen img
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            // Baca file gambar yang dipilih
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
</script>