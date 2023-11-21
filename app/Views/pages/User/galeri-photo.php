<link rel="stylesheet" href="/css/galeri">

<!-- LINK CSSS ^ -->

<div class="clear-float"></div>

<main class="grid">
    <?php foreach ($galeri as $rowGaleri) : ?>
        <img src="/img/<?php echo $rowGaleri['gambar'] ?>" alt="..." height="300px" width="300p">
        <div class="konten"></div>
    <?php endforeach; ?>
</main>