<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?= $this->session->flashdata('pesan') ?>
        </div>
    <?php endif; ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Referensi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Instansi</li>
            </ol>
            <a href="<?= base_url('instansi/tambah') ?>" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Instansi</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($instansi as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('instansi/detail/' . $value['id_instansi']) ?>" class="btn btn-info btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info"></i>
                                        </span>
                                        <span class="text">Detail</span>
                                    </a>
                                    <a href="<?= base_url('instansi/ubah/' . $value['id_instansi']) ?>" class="btn btn-warning btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </a>
                                    <a href="<?= base_url('instansi/hapus/' . $value['id_instansi']) ?>" class="btn btn-danger btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                                <td><?= $value['nama_instansi']; ?></td>
                                <td><?= substr($value['deskripsi'], 0, 20); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>