<div class="container-fluid border pb-4">
    <div class="card text-center mb-5">
        <div class="card-header">
            Halaman
        </div>
        <div class="card-body">
            <h5 class="card-title">Manajament Artikel</h5>
            <p class="card-text">Tulislah sebuah artikel yang informatif dan menarik untuk hari ini, berikan wawasan dan informasi yang bermanfaat kepada pembaca</p>
            <a href="#" class="btn btn-primary">Tambah Artikel</a>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
    </div>
    <?php foreach($artikel as $rowArtikel): ?>
    <a href="/manajement artikel/<?php echo $rowArtikel['id_artikel'] ?>">
    <div class="card shadow p-3 mb-3 bg-body-tertiary rounded">
        <div class="card-header">
            Artikel
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $rowArtikel['judul'] ?></h5>
            <p class="card-text"><?php echo substr($rowArtikel['isi_artikel'], 0 ,200)."..." ?></p>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-primary">Hapus</a>
        </div>
    </div>
    </a>
    <?php endforeach; ?>
</div>