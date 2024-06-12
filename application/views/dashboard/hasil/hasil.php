<h4 class="page-title">Hasil</h4>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data Alternatif</div>
            </div>
            <div class="card-body">
                <table class="table table-head-bg-primary table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><b>Alternatif</b></th>
                            <th scope="col"><b>Keterangan</b></th>
                            <th scope="col"><b>C1</b></th>
                            <th scope="col"><b>C2</b></th>
                            <th scope="col"><b>C3</b></th>
                            <th scope="col"><b>C4</b></th>
                            <th scope="col"><b>C5</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($alternatif as $data) : ?>
                            <tr>
                                <td>A<?= $no++ ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->value_c1 ?></td>
                                <td><?= $data->value_c2 ?></td>
                                <td><?= $data->value_c3 ?></td>
                                <td><?= $data->value_c4 ?></td>
                                <td><?= $data->value_c5 ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Normalisasi Matriks</div>
            </div>
            <div class="card-body">
                <table class="table table-head-bg-primary table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Alternatif</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Ri1</th>
                            <th scope="col">Ri2</th>
                            <th scope="col">Ri3</th>
                            <th scope="col">Ri4</th>
                            <th scope="col">Ri5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($normalisasi as $key => $data) : ?>
                            <tr>
                                <td><?= 'A' . $key ?></td>
                                <td><?= $alternatif[$key - 1]->nama ?></td>
                                <td><?= isset($data[1]) ? $data[1] : '' ?></td>
                                <td><?= isset($data[2]) ? $data[2] : '' ?></td>
                                <td><?= isset($data[3]) ? $data[3] : '' ?></td>
                                <td><?= isset($data[4]) ? $data[4] : '' ?></td>
                                <td><?= isset($data[5]) ? $data[5] : '' ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title">Nilai Preferensi</div>
    </div>
    <div class="card-body">
        <table class="table table-head-bg-primary table-bordered">
            <thead>
                <tr>
                    <th scope="col">Alternatif</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">C1</th>
                    <th scope="col">C2</th>
                    <th scope="col">C3</th>
                    <th scope="col">C4</th>
                    <th scope="col">C5</th>
                    <th scope="col">Hasil</th>
                    <th scope="col">Rangking</th>
                </tr>
            </thead>
            <tbody>
                <?php $rank = 1; ?>
                <?php foreach ($ranking as $item) : ?>
                    <?php $data = $item['data']; ?>
                    <tr>
                        <td><?= 'A' . $item['no'] ?></td> <!-- Menampilkan nomor alternatif asli -->
                        <td><?= $alternatif[$item['no'] - 1]->nama ?></td>
                        <td><?= isset($data[1]) ? $data[1] : '' ?></td>
                        <td><?= isset($data[2]) ? $data[2] : '' ?></td>
                        <td><?= isset($data[3]) ? $data[3] : '' ?></td>
                        <td><?= isset($data[4]) ? $data[4] : '' ?></td>
                        <td><?= isset($data[5]) ? $data[5] : '' ?></td>
                        <td><?= isset($data[0]) ? $data[0] : '' ?></td> <!-- Nilai akhir preferensi -->
                        <td><?= $rank++ ?></td> <!-- Rangking -->
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>