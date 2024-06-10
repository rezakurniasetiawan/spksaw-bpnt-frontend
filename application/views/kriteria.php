<?php $this->load->view('templates/header'); ?>

<div class=" justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-cube"></i> Data Kriteria</h1>

<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>ID Kriteria</th>
          <th>Nama Kriteria</th>
          <th>Bobot</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        foreach($kriteria as $ssw) : ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $ssw->id_kriteria ?></td>
          <td><?= $ssw->nama_kriteria ?></td>
          <td><?= $ssw->bobot ?></td>
          <td onclick="javascript: return confirm('Anda yakin hapus?')">
            <?= anchor('kriteria/hapus/'.$ssw->id_kriteria, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
          </td>
          <td>
            <?= anchor('kriteria/edit/'.$ssw->id_kriteria, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>