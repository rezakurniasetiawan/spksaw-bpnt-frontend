<h4 class="page-title">Kriteria</h4>
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