<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Anggota</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Anggota Perpustakaan</h6>
            <a href="<?= site_url('anggota/tambah'); ?>" class="btn btn-primary btn-sm shadow-sm">
                <i class="fas fa-plus fa-sm"></i> Tambah Anggota
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Anggota</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($anggota as $a): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td class="text-primary font-weight-bold"><?= $a->no_anggota; ?></td>
                            <td><?= $a->nama; ?></td>
                            <td><?= $a->telepon; ?></td>
                            <td>
                                <span class="badge badge-primary px-2 py-2">
                                    <?= $a->status; ?>
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="<?= site_url('anggota/edit/'.$a->no_anggota); ?>" class="btn btn-warning btn-sm shadow-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?= site_url('anggota/hapus/'.$a->no_anggota); ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm shadow-sm">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>