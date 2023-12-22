<div class="container-fluid">
    <div class="card text-center">
        <div class="card-header">
            Halaman
        </div>
        <div class="card-body">
            <h5 class="card-titl">Registrasi Akun</h5>
            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="alert alert-danger alert-dismissible fade show text-start" role="alert">
                    <strong><?php echo session()->getFlashdata('errors') ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
            <div class="container-fluid text-start" id="form-registrasi">
                <form action="/simpan-akun" method="post" class="row g-3">
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" required name="username">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" required name="password">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="@gmail.com" required name="email">
                    </div>
                    <div class="col-md-7">
                        <label for="no_handphone" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" id="no_handphone" required name="no_handphone">
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">Jabatan</label>
                        <select id="inputState" class="form-select" required name="level">
                            <option selected>Pilih...</option>
                            <option>admin</option>
                            <option>pegawai</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="card-footer text-body-secondary">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-primary" role="alert">
                    <?php echo session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($akun as $rowAkun) : ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $rowAkun['username'] ?></td>
                        <td><?php echo $rowAkun['email'] ?></td>
                        <td><?php echo $rowAkun['no_handphone'] ?></td>
                        <td><?php echo $rowAkun['level'] ?></td>
                        <td class="col-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit-akun-<?php echo $rowAkun['id_user'] ?>">
                                Edit
                            </button>
                            <form action="manajement-akun/delete/<?php echo $rowAkun['id_user'] ?>" method="post" class="d-inline">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger me-3" style="width: 75px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-edit-akun-<?php echo $rowAkun['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog text-start">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Akun</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="manajement-akun/simpan-akun/<?php echo $rowAkun['id_user'] ?>" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $rowAkun['username'] ?>" name="username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleInputPassword1" value="<?php echo $rowAkun['email'] ?>" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $rowAkun['no_handphone'] ?>" name="no_handphone">
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" id="inputGroupSelect01" name="level">
                                                <option <?php if ($rowAkun['level'] === null) {
                                                            echo 'selected';
                                                        } ?>>Jabatan</option>
                                                <option <?php if ($rowAkun['level'] === 'admin') {
                                                            echo 'selected';
                                                        } ?> value="1">Admin</option>
                                                <option <?php if ($rowAkun['level'] === 'pegawai') {
                                                            echo 'selected';
                                                        } ?> value="1">Pegawai</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $rowAkun['password'] ?>" name="password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Tanggal dibuat</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" value="<?php echo $rowAkun['tanggal_dibuat'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Script -->
<script src="/script/ManajementProgramScript.js"></script>