<div class="container-fluid">
    <figure class="figure">
        <img src="/img/<?php echo $artikel['gambar'] ?>" class="figure-img img-fluid rounded" alt="...">
        <h3><?php echo $artikel['judul'] ?></h3>
        <figcaption class="figure-caption text-start"><?php echo $artikel['tanggal_dibuat'] ?></figcaption>
    </figure>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <img src="/img/<?php echo $artikel['gambar'] ?>" class="figure-img img-fluid rounded" alt="...">
            </div>
            <div class="col">
                <p style="font-size: 15px;"><?php echo $artikel['judul'] ?></p>
            </div>
        </div>
        <div class="row">
            <?php echo $artikel['isi_artikel'] ?>
        </div>
    </div>
</div>