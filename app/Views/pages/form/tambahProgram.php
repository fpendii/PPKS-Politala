<div class="container-xxl">
    <div class="row">
        <div class="col-7">
            <div class="container-xxl p-3">
                <h1>Tambah Program</h1>
                <form action="/manajement-program/simpan-program" method="post">
                    <div class="mb-3">
                        <label for="uraian" class="form-label">Uraian Program</label>
                        <input type="text" class="form-control" id="uraian" name="uraian">
                    </div>
                    <div class="mb-3">
                        <label for="penyelenggara" class="form-label">Penyelenggara</label>
                        <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>