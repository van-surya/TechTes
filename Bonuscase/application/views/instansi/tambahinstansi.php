<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($gagal) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?= $gagal ?>
        </div>
        <script>
            $(".alert").alert();
        </script>
    <?php endif ?>

    <div class="card shadow  mb-4">
        <div class="card-header py-3">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <h4 class="m-0 text-primary">Tambah Instansi</h4>
                </div>
                <div class="col-md-6 text-md-right mt-2 mt-md-0">
                    <a href="<?= base_url('instansi'); ?>" class="btn btn-danger btn-sm">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Instansi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_instansi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="deskripsi"></textarea>
                    </div>
                </div>
                <div class="card-footer  text-md-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('instansi/tambah'); ?>" class="btn btn-secondary">Reset</a>
                </div>
            </form>
        </div>
    </div>
</div>