<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tambah Alternatif</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('alternatif/create') ?>" method="POST">
                    <div class="form-group">
                        <!-- Name -->
                        <label for="nama" class="font-weight-bold">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="form-control mb-4" required>
                        <!-- Jumlah Tanggungan -->
                        <label class="font-weight-bold">Jumlah Tanggungan</label>
                        <select name="C1" class="form-control mb-4" required>
                            <option value="">--Pilih Jumlah Tanggungan--</option>
                            <?php foreach ($dependent as $data) : ?>
                                <option value="<?= $data->value_dependent ?>"><?= $data->name_dependent ?></option>
                            <?php endforeach ?>
                        </select>

                        <!-- Kondisi Rumah -->
                        <label class="font-weight-bold">Kondisi Rumah</label>
                        <select name="C2" class="form-control mb-4" required>
                            <option value="">--Pilih Kondisi Rumah--</option>
                            <?php foreach ($house as $data) : ?>
                                <option value="<?= $data->value_house ?>"><?= $data->name_house ?></option>
                            <?php endforeach ?>
                        </select>
                        <!-- Jaringan Listrik -->
                        <label class="font-weight-bold">Jaringan Listrik</label>
                        <select name="C3" class="form-control mb-4" required>
                            <option value="">--Pilih Jaringan Listrik--</option>
                            <?php foreach ($electricity as $data) : ?>
                                <option value="<?= $data->value_electricity ?>"><?= $data->name_electricity ?></option>
                            <?php endforeach ?>
                        </select>
                        <!-- Jumlah Penghasilan -->
                        <label class="font-weight-bold">Jumlah Penghasilan</label>
                        <select name="C4" class="form-control mb-4" required>
                            <option value="">--Pilih Jumlah Penghasilan--</option>
                            <?php foreach ($income as $data) : ?>
                                <option value="<?= $data->value_income ?>"><?= $data->name_income ?></option>
                            <?php endforeach ?>
                        </select>
                        <!-- Jenis Pekerjaan -->
                        <label class="font-weight-bold">Jenis Pekerjaan</label>
                        <select name="C5" class="form-control mb-4" required>
                            <option value="">--Pilih Jenis Pekerjaan--</option>
                            <?php foreach ($work as $data) : ?>
                                <option value="<?= $data->value_work ?>"><?= $data->name_work ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="actions text-right mt-3 mb-3">
                        <div class="actions text-right mt-3 mb-3">
                            <a href="<?= base_url('alternatif') ?>" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>