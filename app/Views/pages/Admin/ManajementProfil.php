<!-- Link CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/TambahArtikel.css">

<div class="container-fluid">
    <form action="manajement-profil/simpan-profil/<?php echo $alamat[0]['id_profil'] ?>" method="post">
        <?php echo csrf_field() ?>
        <div class="container text-center">
            <div class="card text-center">
                <div class="card-header">
                    Halaman
                </div>
                <div class="card-body">
                    <h5 class="card-title">Manajement Profil</h5>
                    <p class="card-text">Silakan gunakan formulir di bawah ini untuk melakukan update pada data profil. Pastikan Anda memeriksa dan memastikan bahwa informasi yang dimasukkan akurat dan terkini.</p>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <div class="card-footer text-body-secondary">
                    2 days ago
                </div>
            </div>
            <div class="row">
                <div class="col card-body shadow-lg p-3 mb-2 bg-body-tertiary rounded">
                    <div class="card">
                        <div class="card-body">
                            Visi Satgas PPKS
                        </div>
                    </div>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" name="tujuan"><?php echo $alamat[0]['visi'] ?></textarea>
                    </div>
                </div>
                <div class="text-start col shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a id="btnTugas" class="nav-link active" aria-current="page">Tugas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="btnVisi" class="nav-link active" aria-current="page" href="#">Visi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="btnMisi" class="nav-link active" aria-current="page" href="#">Misi</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>

                    <div class="form-floating">
                        <textarea class="form-control summernote" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="visi">
                        <p class=""><?php echo $alamat[0]['tujuan'] ?></p>
                        <p class=""><?php echo $alamat[0]['visi'] ?></p>
                        <p class=""><?php echo $alamat[0]['misi'] ?></p>
                    </textarea>
                    </div>
                </div>
                <div class="text-start col shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <h5>Misi</h5>
                    <div class="form-floating">
                        <textarea class="form-control summernote" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="misi"><?php echo $alamat[0]['misi'] ?></textarea>
                    </div>
                </div>
            </div>

            <!-- ===== STRUKTUR ORGANISASI ===== -->
            <h2>Struktur Organisasi <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </svg>
                <button class="btn btn-primary" type="submit">Ubah</button>
            </h2>
            <div class="container-fluid mb-5">
                <img src="/img/struktur-organisasi.png" class="img-fluid" alt="...">

            </div>

            <!-- ===== SOP ===== -->
            <h2>SOP <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </svg>
                <button class="btn btn-primary" type="submit">Ubah</button>
            </h2>
            <div class="container-fluid mb-5">
                <img src="/img/sop.png" class="img-fluid" alt="...">
            </div>
        </div>
    </form>
</div>

<!-- ===== Pop Up ===== -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" id="closePopup">&times;</span>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet pariatur ducimus, itaque rem harum ad. Eaque magni sint voluptatibus sit ipsa cum eligendi, magnam, debitis soluta veniam, accusantium quod in!Loremlorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos consectetur dolore possimus laborum sunt iste neque molestias, dolorum distinctio repellendus temporibus, quasi debitis animi repudiandae sint minus. Aut, blanditiis commodi.</p>
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