 <?php $this->load->view('templates/header'); ?>



<div class=" justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-book"></i> Hasil SAW</h1>

<div class="row mt-3">
 <div class="card">
  <div class="card-header">
  	<!-- /.btn sm berfungsi untuk mengatur kecil at -->
   
              </div>
              <!-- /.card-header -->
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
                      <th colspan="2"></th>
                  </tr>
                  </thead>
                  <?php 
                  $no = 1;
          foreach($hasil as $ssw) : ?>
                <tbody>
                  <tr>
                    <td><?= $no++ ?></td>
                   <td><?= $ssw->nama?></t d>
                   <td><?= $ssw->C1?></td>
                   <td><?= $ssw->C2?></td>
                   <td><?= $ssw->C3?></td>
                   <td><?= $ssw->C4?></td>
                   <td><?= $ssw->C5?></td>
                   <td onclick="javascript: return confirm('anda yakin hapus?'"><?php echo anchor('hasil/hapus/'.$ssw->no, '<div class="btn btn-danger btn-sm")><i class="fa fa-trash"></i></div>') ?></td>
                   <td><?php echo anchor('hasil/edit/'.$ssw->no, '<div class="btn btn-primary btn-sm")><i class="fa fa-edit"></i></div>') ?></td>
        
     </tr>
   </tbody>
 <?php endforeach ?>
</table>
</section>


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

        <form action="<?= base_url('hasil/tambah_aksi') ?>" method="POST">
<div class="form-group">
  <label>Nama</label>
  <input type="text" name="Nama" class="form-control">
  <?= form_error('Nama', '<div class="text-small text-danger">', '</div'); ?>
</div>
<div class="form-group">
  <label>Jenis Kelamin</label>
  <input type="text" name="Jenis_Kelamin" class="form-control">
  <?= form_error('Jenis Kelamin', '<div class="text-small text-danger">', '</div'); ?>
</div>
<div class="form-group">
  <label>Alamat</label>
  <input type="text" name="Alamat" class="form-control">
  <?= form_error('Alamat', '<div class="text-small text-danger">', '</div'); ?>
</div>

 
</form>
      
    </div>
  </div>
</div>
</div>
  </div>