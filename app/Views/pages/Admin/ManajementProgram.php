<div class="container-fluid border pb-4">
    <div class="card text-center mb-5">
        <div class="card-header">
            Halaman
        </div>
        <div class="card-body">
            <h5 class="card-title">Manajement Program</h5>
            <!-- Button Trigger Modal Tambah Program -->
            <button type="button" class="btn btn-succes" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Program
            </button>

            <!-- Modal -->
            <div class="modal fade text-start" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-body-secondary">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-primary" role="alert">
                    <?php echo session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php foreach ($program as $rowProgram) : ?>
        <!-- <a href="/manajement artikel/<?php echo $rowProgram['id_program'] ?>"> -->
        <div class="card shadow p-3 mb-3 bg-body-tertiary rounded">
            <div class="card-header">
                Program
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $rowProgram['urain'] ?></h5>
                <p class="card-text"><?php echo substr($rowProgram['penyelenggara'], 0, 200) . "..." ?></p>
                <p style="font-size: 13px;"><?php echo $rowProgram['lokasi'] ?></p>
                <p style="font-size: 13px;"><?php echo $rowProgram['waktu'] ?></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $rowProgram['id_program'] ?>">
                    Detail
                </button>
                <form action="manajement-program/delete/<?php echo $rowProgram['id_program'] ?>" method="post" class="d-inline">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick=" return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $rowProgram['id_program'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Artikel</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $rowProgram['urain'] ?></h5>
                                        <p class="card-text"><?php echo $rowProgram['penyelenggara'] ?></p>
                                        <p class="card-text"><small class="text-body-secondary"><?php echo $rowProgram['lokasi'] ?></small></p>
                                        <p class="card-text"><small class="text-body-secondary"><?php echo $rowProgram['waktu'] ?></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <form action="manajement-program/edit/<?php echo $rowProgram['id_program'] ?>" method="post">
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- </a> -->
    <?php endforeach; ?>
</div>