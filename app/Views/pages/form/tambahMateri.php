<div class="container-fluid">
    <h1>Tambah Materi</h1>
    <form action="/manajement-materi/simpan-materi" method="post">
        <div class="mb-3">
            <label for="judul-materi" class="form-label">Judul Materi</label>
            <input type="text" class="form-control" id="judul-materi" name="judul_materi" required>
        </div>
        <div class="mb-3">
            <label for="judul-materi" class="form-label">Link Materi</label>
            <input type="text" class="form-control" id="judul-materi" name="link_document" required>
        </div>
        <a href="/manajement-materi" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>