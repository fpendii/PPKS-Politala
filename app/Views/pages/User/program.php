<div class="container-fluid">
    <?php foreach($program as $rowProgram): ?>
        <ol class="list-program list-group">
            <button>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col col-14 badan-artikel">
                                    <div class="fw-bold">
                                        <h4><?php echo $rowProgram['urain'] ?></h4>
                                    </div>
                                    <p style="color: red;"><?php echo $rowProgram['lokasi'] ?>, <?php echo $rowProgram['waktu'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="badge bg-primary rounded-pill">...</span>
                </li>
            </button>
        </ol>
    <?php endforeach; ?>
    <!-- Paginition -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>