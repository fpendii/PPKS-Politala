<link rel="stylesheet" href="/css/galeri">

<!-- LINK CSSS ^ -->

    <div class="clear-float"></div>

    <div class="container-lg text-center">
        <div class="row">
            <?php foreach($galeri as $rowGaleri): ?>
            <div class="col col-photo border p-2 min-with">
                <img src="/img/<?php echo $rowGaleri['gambar'] ?>" class="img-fluid" alt="..." width="300px">
                <h6><?php echo $rowGaleri['judul']; ?></h6>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


