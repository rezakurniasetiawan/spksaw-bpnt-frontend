<?php $this->load->view('templates/header'); ?>

<div class=" justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Data Alternatif</h1>

<!-- row mt-3 untuk mngatur jarak spasi-->
<div class="row mt-3">
<div class="card">
  <div class="card-header">
    <a href="<?= base_url('alternatif/tambah') ?>" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Alternatif</a>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jumlah Tanggunan</th>
          <th>Kondisi Rumah</th>
          <th>Jaringan Listrik</th>
          <th>Jumlah Penghasilan</th>
          <th>Jenis Pekerjaan</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        foreach($alternatif as $ssw) : ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $ssw->nama ?></td>
          <td><?= $ssw->C1 ?></td>
          <td><?= $ssw->C2 ?></td>
          <td><?= $ssw->C3 ?></td>
          <td><?= $ssw->C4 ?></td>
          <td><?= $ssw->C5 ?></td>
          <td onclick="javascript: return confirm('Anda yakin hapus?')">
            <?= anchor('alternatif/hapus/'.$ssw->no, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
          </td>
          <td>
            <?= anchor('alternatif/edit/'.$ssw->no, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA ALTERNATIF</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="post" action="<?php base_url().'alternatif/get_data'; ?>"

          ><div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
            <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
          </div>

          <div class="form-group">
          <label class="font-weight-bold">Jumlah Tanggungan</label>
          <select name="C1" class="form-control" required>
            <option value="">--Pilih Status--</option>
            <option value="4 anak atau lebih">4 anak atau lebih</option>
            <option value="3 anak">3 anak</option> 
            <option value="2 anak">2 anak</option>
            <option value="1 anak">1 anak</option>
            <option value="Tidak punya anak">Tidak punya anak</option>           
          </select>
        </div>

          <div class="form-group">
          <label class="font-weight-bold">Kondisi Rumah</label>
          <select name="C2" class="form-control" required>
            <option value="">--Pilih Status--</option>
            <option value="Rumah kayu">Rumah kayu</option>
            <option value="½ tembok + lantai tanah">½ tembok + lantai tanah</option>     

            <option value="½ tembok + lantai semen">½ tembok + lantai semen</option>
            <option value="Rumah tembok + lantai semen">Rumah tembok + lantai semen</option>
            <option value="Rumah tembok + lantai keramik">Rumah tembok + lantai keramik</option>
          </select>
        </div>

           <div class="form-group">
          <label class="font-weight-bold">Jaringan Listrik</label>
          <select name="C3" class="form-control" required>
            <option value="">--Pilih Status--</option>
            <option value="Tidak ada">Tidak adah</option>
            <option value="Numpang">Numpang</option>           
            <option value="Milik Sendiri daya 450 watt">Milik Sendiri daya 450 watt</option>
            <option value="Milik sendiri daya 900 watt">Milik sendiri daya 900 watt</option>
            <option value="Milik sendiri daya > 900 watt">Milik sendiri daya > 900 watt</option>
          </select>
        </div>

           <div class="form-group">
          <label class="font-weight-bold">Jumlah Penghasilan</label>
          <select name="C4" class="form-control" required>
            <option value="">--Pilih Status--</option>
            <option value="x< 200.000">x< 200.000</option>
            <option value="200.000 - 500.000">200.000-500.000 </option> 
            <option value="500.000-  1.000.000">500.000-  1.000.000 </option>
            <option value="1.000.000-2.000.000">1.000.000-2.000.000 </option>
            <option value="x>2.000.000">x>2.000.000 </option>           
          </select>
        </div>

           <div class="form-group">
          <label class="font-weight-bold">Jumlah Penghasilan</label>
          <select name="C5" class="form-control" required>
            <option value="">--Pilih Status--</option>
            <option value="Pengangguran (lansia)">Pengangguran (lansia)</option>
            <option value="Buruh ">Buruh </option>
            option>
            <option value="Petani">Petani</option>
            option>
            <option value="Wiraswasta">Wiraswasta</option>
            option>
            <option value="PNS">PNS</option>            
          </select>
        </div>

          
<!-- text right untuk rata kanan-->
          <div class="card-footer text-right">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i> Reset</button>

            

        </div>
        </form>
      </div>
    </div>
  </div>
</div>

