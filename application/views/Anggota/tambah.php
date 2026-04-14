<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Anggota Baru</h1>

    <div class="card shadow mb-4" style="max-width: 800px;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir Data Anggota</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= site_url('anggota/simpan'); ?>">
                <div class="form-group">
                    <label class="font-weight-bold text-dark">Nomor Anggota</label>
                    <input type="text" name="no_anggota" class="form-control border-left-primary" placeholder="Masukkan Nomor..." required>
                </div>
                
                <div class="form-group">
                    <label class="font-weight-bold text-dark">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control border-left-primary" placeholder="Nama Lengkap..." required>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-dark">Nomor Telepon</label>
                            <input type="text" name="telepon" class="form-control" placeholder="08xxxx">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-dark">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="contoh@mail.com">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold text-dark">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold text-dark">Tanggal Daftar</label>
                    <input type="date" name="tgl_daftar" class="form-control" value="<?= date('Y-m-d'); ?>">
                </div>

                <hr>
                <button type="submit" class="btn btn-primary px-4 shadow-sm">Simpan Data</button>
                <a href="<?= site_url('anggota');?>" class="btn btn-light px-4">Batal</a>
            </form>
        </div>
    </div>
</div>