<div class="content-wrapper">
	<section class="content">
		<?php foreach($alternatif as $ssw) { ?>

		<form action="php <?php echo base_url().'alternatif/update'; ?>"method="post">

			<div class="form-group">
				<label>Nama</label>
				<input type="hidden" name="nama" class="form-control" value="<?php echo $ssw->nama ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $ssw->nama ?>">
			</div>

			<div class="form-group">
				<label>Jumlah Tanggungan</label>
				<input type="text" name="C1" class="form-control" value="<?php echo $ssw->C1 ?>">
			</div>

			<div class="form-group">
				<label>Kondisi Rumah</label>
				<input type="text" name="C2" class="form-control" value="<?php echo $ssw->C2 ?>">
			</div>

			<div class="form-group">
				<label>Jaringan Listrik</label>
				<input type="text" name="C3" class="form-control" value="<?php echo $ssw->C3 ?>">
			</div>

			<div class="form-group">
				<label>Jumlah Pnghasilan</label>
				<input type="text" name="C4" class="form-control" value="<?php echo $ssw->C4 ?>">
			</div>

			<div class="form-group">
				<label>Jenis Pekerjaan</label>
				<input type="text" name="C5" class="form-control" value="<?php echo $ssw->C5 ?>">
			</div>
          
          <button type="reset" class="btn btn-danger">Reset</button>
         <button type="submit" class="btn btn-primary">Simpan</button>

		</form>
	<?php }  ?>
	</section>
</div>