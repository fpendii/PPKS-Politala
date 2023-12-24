<!-- Link CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/TambahArtikel.css">

<form action="/manajement-profil/simpan-profil" method="post" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="container text-center mb-3">
            <div class="card text-center">
                <div class="card-header">
                    Halaman 
                </div>
                <div class="card-body text-start">
                    <h5 class="card-title">Manajement Profil</h5>
                    <p class="card-text">Silakan gunakan formulir di bawah ini untuk melakukan update pada data profil. Pastikan Anda memeriksa dan memastikan bahwa informasi yang dimasukkan akurat dan terkini.</p>
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <input name="id_profil" type="hidden" value="<?php echo $alamat[0]['id_profil'] ?>">
                    </div>
                </div>
                <div class="card-footer text-body-secondary">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?php echo session()->getFlashdata('pesan') ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif ?>
                    <?php if (session()->getFlashdata('errors')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><?php echo session()->getFlashdata('errors') ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Visi</h4>
                    <div class="form-floating">
                        <textarea class="form-control summernote" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="visi"><?php echo $alamat[0]['visi'] ?></textarea>
                    </div>
                </div>
                <div class="col">
                    <h4>Misi</h4>
                    <div class="form-floating">
                        <textarea class="form-control summernote" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="misi"><?php echo $alamat[0]['misi'] ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h4>Tujuan</h4>
                    <div class="form-floating">
                        <textarea class="form-control summernote" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="tujuan"><?php echo $alamat[0]['tujuan'] ?></textarea>
                    </div>
                </div>
                <div class="col">
                    <h4>No Handphone</h4>
                    <div class="form-floating">
                        <textarea class="form-control summernote" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="no_handphone"><?php echo $alamat[0]['no_handphone'] ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h4>Email</h4>
                    <div class="form-floating">
                        <textarea class="form-control summernote" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="email"><?php echo $alamat[0]['email'] ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h4>Struktur Organisasi</h4>
                    <?php echo $alamat[0]['struktur_organisasi'] ?>
                    <input type="hidden" name="gambar_lama" id="gambar_lama" value="<?php echo $alamat[0]['struktur_organisasi'] ?>">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Ganti Gambar Struktur Organisasi</label>
                        <input class="form-control form-control-sm" id="inputFile" onchange="PreviewImage(event)" type="file" name="gambar">
                    </div>
                    <img id="preview" src="/img/<?php echo $alamat[0]['struktur_organisasi'] ?>" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>
</form>


<!-- Script -->
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
<script src="/script/profil.js"></script>
<!-- Link JS -->
<script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('.summernote').summernote({
        placeholder: 'Silahkan Tambah Artikel Hari ini',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view']
        ],
        callbacks: {
            onImageUpload: function(files) {
                for (let i = 0; i < files.length; i++) {
                    $.upload(files[i]);
                }
            },
            onMediaDelete: function(target) {
                $.delete(target[0].src);
            }
        }
    });

    $.upload = function(file) {
        let out = new FormData();
        out.append('file', file, file.name);
        $.ajax({
            method: 'POST',
            url: 'aploud-gambar',
            contentType: false,
            cache: false,
            processData: false,
            data: out,
            success: function(img) {
                $('.summernote').summernote('insertImage', img);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    };
</script>