<!-- Begin Page Content -->
<div class="container-fluid">

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
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Instansi</label>
                <div class="col-sm-10">
                    <input readonly type="text" class="form-control" name="nama_instansi" value="<?= $datainstansi['nama_instansi'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea readonly class="form-control" name="deskripsi"> <?= $datainstansi['deskripsi'] ?></textarea>
                </div>
            </div>
            <div class="card-footer  text-md-right">
                <a href="<?= base_url('instansi'); ?>" class="btn btn-secondary">kembali</a>
            </div>
        </div>
    </div>
</div>