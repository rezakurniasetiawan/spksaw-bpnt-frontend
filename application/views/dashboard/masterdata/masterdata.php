
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data Kriteria</div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <th><b>No</b></th>
                            <th><b>ID Kriteria</b></th>
                            <th><b>Nama Kriteria</b></th>
                            <th><b>Bobot</b></th>
                            <!-- <th><b>Action</b></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kriteria as $ssw) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ssw->symbol ?></td>
                                <td><?= $ssw->nama_kriteria ?></td>
                                <td><?= $ssw->bobot ?></td>
                                <!-- <td>
                                    <a href="<?= base_url('kriteria/update_kriteria/' . $ssw->id_kriteria) ?>" class="btn btn-primary btn-sm"><i class="la la-edit"></i> Edit</a>
                                    <button class="btn btn-danger btn-sm"><i class="la la-trash"></i> Delete</button>
                                </td> -->
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<h4 class="page-title">Master Data</h4>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">C1 Jumlah Tanggungan</div>
            </div>
            <div class="card-body">
                <table class="table table-head-bg-default table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($dependent as $data) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->name_dependent ?></td>
                                <td><?= $data->value_dependent ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">C2 Kondisi Rumah</div>
            </div>
            <div class="card-body">
                <table class="table table-head-bg-default table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($house as $data) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->name_house ?></td>
                                <td><?= $data->value_house ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">C3 Jaringan Listrik</div>
            </div>
            <div class="card-body">
                <table class="table table-head-bg-default table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($electricity    as $data) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->name_electricity  ?></td>
                                <td><?= $data->value_electricity     ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">C4 Jumlah Penghasilan</div>
            </div>
            <div class="card-body">
                <table class="table table-head-bg-default table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($income as $data) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->name_income ?></td>
                                <td><?= $data->value_income ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">C5 Jenis Pekerjaan </div>
            </div>
            <div class="card-body">
                <table class="table table-head-bg-default table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($work as $data) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->name_work ?></td>
                                <td><?= $data->value_work ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">

    </div>
</div>