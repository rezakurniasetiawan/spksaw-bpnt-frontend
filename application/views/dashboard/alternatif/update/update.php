<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Alternatif</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('alternatif/update') ?>" method="POST">
                    <input type="hidden" name="no" value="<?= $alternatif[0]->no ?>">
                    <div class="form-group">
                        <!-- Name -->
                        <label for="nama" class="font-weight-bold">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="form-control mb-4" value="<?= isset($alternatif[0]->nama) ? $alternatif[0]->nama : '' ?>" required>
                        <!-- Jumlah Tanggungan -->
                        <label class="font-weight-bold">Jumlah Tanggungan</label>
                        <select name="C1" class="form-control mb-4" required>
                            <option value="" disabled selected>--Pilih Jumlah Tanggungan--</option>
                            <?php foreach ($dependent as $data) : ?>
                                <option value="<?= $data->value_dependent ?>" <?= isset($alternatif[0]->value_c1) && $alternatif[0]->value_c1 == $data->value_dependent ? 'selected' : '' ?>>
                                    <?= $data->name_dependent ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <!-- Kondisi Rumah -->
                        <label class="font-weight-bold">Kondisi Rumah</label>
                        <select name="C2" class="form-control mb-4" required>
                            <option value="" disabled selected>--Pilih Kondisi Rumah--</option>
                            <?php foreach ($house as $data) : ?>
                                <option value="<?= $data->value_house ?>" <?= isset($alternatif[0]->value_c2) && $alternatif[0]->value_c2 == $data->value_house ? 'selected' : '' ?>>
                                    <?= $data->name_house ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <!-- Jaringan Listrik -->
                        <label class="font-weight-bold">Jaringan Listrik</label>
                        <select name="C3" class="form-control mb-4" required>
                            <option value="" disabled selected>--Pilih Jaringan Listrik--</option>
                            <?php foreach ($electricity as $data) : ?>
                                <option value="<?= $data->value_electricity ?>" <?= isset($alternatif[0]->value_c3) && $alternatif[0]->value_c3 == $data->value_electricity ? 'selected' : '' ?>>
                                    <?= $data->name_electricity ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <!-- Jumlah Penghasilan -->
                        <label class="font-weight-bold">Jumlah Penghasilan</label>
                        <select name="C4" class="form-control mb-4" required>
                            <option value="" disabled selected>--Pilih Jumlah Penghasilan--</option>
                            <?php foreach ($income as $data) : ?>
                                <option value="<?= $data->value_income ?>" <?= isset($alternatif[0]->value_c4) && $alternatif[0]->value_c4 == $data->value_income ? 'selected' : '' ?>>
                                    <?= $data->name_income ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <!-- Jenis Pekerjaan -->
                        <label class="font-weight-bold">Jenis Pekerjaan</label>
                        <select name="C5" class="form-control mb-4" required>
                            <option value="" disabled selected>--Pilih Jenis Pekerjaan--</option>
                            <?php foreach ($work as $data) : ?>
                                <option value="<?= $data->value_work ?>" <?= isset($alternatif[0]->value_c5) && $alternatif[0]->value_c5 == $data->value_work ? 'selected' : '' ?>>
                                    <?= $data->name_work ?>
                                </option>
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