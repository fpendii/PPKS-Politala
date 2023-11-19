<link rel="stylesheet" href="/css/galeri">

<!-- LINK CSSS ^ -->

<div class="container-fluid">
    <div class="card text-center">
        <div class="card-header">
            Galeri
        </div>
        <div class="card-body">
            <h5 class="card-title">Manajement Galeri</h5>
            <p class="card-text">Buatlah posting dengan galeri gambar untuk hari ini. Pastikan gambar yang diunggah relevan dan berkualitas. Terima kasih</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($galeri as $rowGaleri): ?>
                <tr>
                    <td><img src="/img/<?php echo $rowGaleri['gambar'] ?>" style="width: 100px;" class="img-thumbnail" alt="<?php echo $rowGaleri['gambar'] ?>"></td>
                    <td><?php echo $rowGaleri['judul'] ?></td>
                    <td><?php echo $rowGaleri['tanggal_dibuat'] ?></td>
                    <td style="width: 150px;">
                        <button type="button" class="btn btn-primary me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg></button>
                        <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                            </svg></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>