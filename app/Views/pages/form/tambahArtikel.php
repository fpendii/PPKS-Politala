<!-- Link CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/TambahArtikel.css">

<div class="container-xxl p-2">
    <div class="container-xxl">
        <div class="row">
            <div class="col-9">
                <h2>Tambah Artikel</h2>
                <form action="simpan_artikel" method="post" enctype="multipart/form-data">
                    <?php if (session()->getFlashdata('errors')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><?php echo session()->getFlashdata('errors') ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <?php echo csrf_field() ?>
                    <div class="row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <?php  ?>
                            <input type="text" class="form-control " id="judul" name="judul" value="<?php echo old('judul') ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Gambar</label>
                            <input class="form-control form-control-sm" id="inputFile" onchange="PreviewImage(event)" type="file" name="gambar">
                        </div>
                        <img id="preview" src="" class="img-fluid" alt="...">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control summernote" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="isi_artikel"><?php echo old('isi_artikel') ?></textarea>
                    </div>
                    <div class="mt-3">
                        <a class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

</div>


<!-- Link JS -->
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
            ['view', ['fullscreen', 'codeview', 'help']]
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