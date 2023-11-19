    <!-- Link Css -->
    <link rel="stylesheet" href="/css/ArtikelStyle.css">
    
    <div class="container-fluid">
        <ol class="list-group list-group-numbered">
            <?php foreach ($artikel as $RowArtikel) : ?>
                <a href="/artikel/<?php echo $RowArtikel['id_artikel'] ?>">
                <button class="buttonArtikel">
                    <li class="Artikel list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <img width="200px" src="/img/<?php echo $RowArtikel['gambar'] ?>" class="img-thumbnail" alt="...">
                                    </div>
                                    <div class="col col-8 badan-artikel">
                                        <div class="fw-bold"><?php echo $RowArtikel['judul'] ?></div>
                                        <p><?php echo $RowArtikel['isi_artikel'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                </button>
                </a>
            <?php endforeach; ?>
        </ol>

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
