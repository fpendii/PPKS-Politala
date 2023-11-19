<div class="container-fluid">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
            </div>
            <div class="col">
                <h4>Komitmen Satgas PPKS Politala</h4>
                <p>Politeknik Negeri Tanah Laut berkomitmen untuk melakukan pencegahan dan penanganan segala bentuk kekerasan seksual yang terjadi di lingkungan kampus ULM. Laporkan segala bentuk tindak kekerasan seksual ke Tim Satgas PPKS ULM melalui link dibawah ini. Mari mewujudkan kampus aman, nyaman, dan sehat untuk semua.</p>
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <button type="button" class="btn btn-danger">Laporkan!!</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-warning">Petunjuk Laporan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center  m-5">
        <div class="row">
            <div class="col order-last  m-2">
                <h4>Materi</h4>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col order-last">
                    Gambar
                </div>
                <div class="col">
                    <div class="container text-center">
                        <div class="row">
                            <div class="kotak-materi">Peraturan Perundang-Undangan dan Kebijakan Politala</div>
                        </div>
                        <div class="row">
                            <div class="kotak-materi">Materi Pelatihan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 30px; margin-top: 50px;" class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <h3>Artikel</h3>
                <hr>
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="/img/<?php echo $artikel->gambar ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo substr($artikel->judul, 0, 45) ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <h3><a href="/galeri photo">Galeri</a></h3>
                <hr>
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="/img/<?php echo $galeri->gambar ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $galeri->judul ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <h3>Total Aduan & Program</h3>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Aduan</th>
                            <th scope="col">Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $total_pengaduan ?></td>
                            <td><?php echo $total_program ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

