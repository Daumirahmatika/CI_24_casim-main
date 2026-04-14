<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Profil Anggota</h1>

    <div class="card shadow mb-4" style="max-width: 800px;">
        <div class="card-header py-3 bg-warning">
            <h6 class="m-0 font-weight-bold text-white">Update Data: <?= $anggota->nama; ?></h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= site_url('anggota/update'); ?>">
                <div class="form-group">
                    <label class="font-weight-bold">ID Anggota (Read Only)</label>
                    <input type="text" name="no_anggota" class="form-control bg-light" value="<?= $anggota->no_anggota; ?>" readonly>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" value="<?= $anggota->nama; ?>" required>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Status Keanggotaan</label>
                    <select name="status" class="form-control border-left-warning">
                        <option value="Aktif" <?= ($anggota->status == 'Aktif') ? 'selected' : ''; ?>>Aktif</option>
                        <option value="Tidak Aktif" <?= ($anggota->status == 'Tidak Aktif') ? 'selected' : ''; ?>>Tidak Aktif</option>
                    </select>
                </div>

                <hr>
                <button type="submit" class="btn btn-warning text-dark font-weight-bold shadow-sm">Update Sekarang</button>
                <a href="<?= site_url('anggota'); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>