    <!-- Link Css -->
    <link rel="stylesheet" href="/css/ArtikelStyle.css">

    <div class="container-xll">
        <div class="container-xll">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-10">
                        <?php foreach($artikel as $RowArtikel): ?>
                        <div class="row mb-3">
                            <a href="artikel/detail/<?php echo $RowArtikel['id_artikel'] ?>">
                            <div class="col">
                                <div class="card" style="width: 60rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Artikel</h5>
                                        <img src="/img/<?php echo $RowArtikel['gambar'] ?>" class="img-thumbnail" width="200px" alt="...">
                                        <h6 class="card-subtitle mb-2 text-muted mt-2"><?php echo $RowArtikel['tanggal_dibuat'] ?></h6>
                                        <p class="card-text"><?php echo $RowArtikel['judul'] ?></p>
                                        <a href="artikel/detail/<?php echo $RowArtikel['id_artikel'] ?>" class="card-link">Lihat selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <div class="col">
                        Column
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Pagition -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    </div>