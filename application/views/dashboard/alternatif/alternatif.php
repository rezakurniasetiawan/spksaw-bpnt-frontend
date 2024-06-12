<h4 class="page-title">Alternatif</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data Alternatif</div>
            </div>
            <div class="card-body">
                <a href="<?= base_url('alternatif/add') ?>" class="btn btn-primary mb-3"><i class="la la-plus"></i> Tambah Alternatif</a>
                <table class="table table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col"><b>No</b></th>
                            <th scope="col"><b>Nama</b></th>
                            <th scope="col"><b>Jumlah Tanggunan</b></th>
                            <th scope="col"><b>Kondisi Rumah</b></th>
                            <th scope="col"><b>Jaringan Listrik</b></th>
                            <th scope="col"><b>Jumlah Penghasilan</b></th>
                            <th scope="col"><b>Jenis Pekerjaan</b></th>
                            <th scope="col"><b>Aksi</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($alternatif as $ssw) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ssw->nama ?></td>
                                <td><?= $ssw->name_c1 ?></td>
                                <td><?= $ssw->name_c2 ?></td>
                                <td><?= $ssw->name_c3 ?></td>
                                <td><?= $ssw->name_c4 ?></td>
                                <td><?= $ssw->name_c5 ?></td>
                                <td>
                                    <a href="<?= base_url('alternatif/update/' . $ssw->no) ?>" class="btn btn-primary btn-sm"><i class="la la-edit"></i> Edit</a>
                                    <a href="<?= base_url('alternatif/delete/' . $ssw->no) ?>" class="btn btn-danger btn-sm delete-btn" data-confirm="Apakah Anda Yakin Ingin Menghapus Data Ini?"><i class="la la-trash"></i> Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>