<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Update Kriteria</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('alternatif/update_data') ?>" method="POST">
                    <div class="form-group">
                        <!-- Name -->
                        <label for="nama" class="font-weight-bold">Nama</label>
                        <input type="text" name="nama_kriteria" id="nama" placeholder="Masukkan Nama" class="form-control mb-4" value="<?= isset($kriteria[0]->nama_kriteria) ? $kriteria[0]->nama_kriteria : '' ?>" required>

                        <!-- Bobot -->
                        <label class="font-weight-bold">Bobot</label>
                        <input type="text" name="bobot" id="bobot" placeholder="Masukkan Bobot" class="form-control mb-4" value="<?= isset($kriteria[0]->bobot) ? $kriteria[0]->bobot : '' ?>" required>
                        <input type="hidden" name="id_kriteria" value="<?= isset($kriteria[0]->id_kriteria) ? $kriteria[0]->id_kriteria : '' ?>">
                    </div>
                    <div class="actions text-right mt-3 mb-3">
                        <div class="actions text-right mt-3 mb-3">
                            <a href="<?= base_url('kriteria') ?>" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>