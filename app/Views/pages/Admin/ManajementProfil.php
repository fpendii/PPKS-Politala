<!-- Link CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/TambahArtikel.css">

<div class="container-fluid">
    <div class="container text-center mb-3">
        <div class="card text-center">
            <div class="card-header">
                Halaman
            </div>
            <div class="card-body">
                <h5 class="card-title">Manajement Profil</h5>
                <p class="card-text">Silakan gunakan formulir di bawah ini untuk melakukan update pada data profil. Pastikan Anda memeriksa dan memastikan bahwa informasi yang dimasukkan akurat dan terkini.</p>
            </div>
            <div class="card-footer text-body-secondary">
            </div>
        </div>
        <div class="row">
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col m-2">
                <div class="card text-start">
                    <div class="card-header">
                        <h5>Alamat</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><?php echo $alamat[0]['alamat'] ?></p>
                        <a href="manajement-profil/edit/alamat" type="button" class="btn btn-warning text-end">Edit</a>
                    </div>
                </div>
            </div>
            <div class="col m-2">
                <div class="card text-start">
                    <div class="card-header">
                        <h5>No Handphone</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><?php echo $alamat[0]['no_handphone'] ?></p>
                        <a href="manajement-profil/edit/no_handphone" type="button" class="btn btn-warning text-end">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m-2">
                <div class="card text-start">
                    <div class="card-header">
                        <h5>Email</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><?php echo $alamat[0]['email'] ?></p>
                        <a href="manajement-profil/edit/email" type="button" class="btn btn-warning text-end">Edit</a>
                    </div>
                </div>
            </div>
            <div class="col m-2">
                <div class="card text-start">
                    <div class="card-header">
                        <h5>Tujuan</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><?php echo $alamat[0]['tujuan'] ?></p>
                        <a href="manajement-profil/edit/tujuan" type="button" class="btn btn-warning text-end">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m-2">
                <div class="card text-start">
                    <div class="card-header">
                        <h5>Visi</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><?php echo $alamat[0]['visi'] ?></p>
                        <a href="manajement-profil/edit/visi" type="button" class="btn btn-warning text-end">Edit</a>
                    </div>
                </div>
            </div>
            <div class="col m-2">
                <div class="card text-start">
                    <div class="card-header">
                        <h5>Misi</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><?php echo $alamat[0]['misi'] ?></p>
                        <a href="manajement-profil/edit/misi" type="button" class="btn btn-warning text-end">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Script -->
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