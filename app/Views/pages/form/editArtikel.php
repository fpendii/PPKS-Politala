<!-- Link CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/TambahArtikel.css">


<div class="container-fluid">
    <h2>Edit Artikel</h2>
    <form action="update/<?php echo $artikel['id_artikel'] ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field() ?>
        <div class="row mb-3">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $artikel['judul'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="mb-3">
                <label for="gambar" class="form-label">Tambahkan Gambar</label>
                <input class="form-control form-control-sm" id="gambar" name="gambar" type="file">
            </div>
        </div>
        <div class="form-floating">
            <textarea class="form-control summernote" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="artikel"><?php echo $artikel['isi_artikel'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

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