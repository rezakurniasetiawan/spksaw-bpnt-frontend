<div class="content-wrapper">
	<section class="content">
		<?php foreach($kriteria as $ssw) { ?>

		<form action="php <?php echo base_url().'kriteria/update'; ?>"method="post">

			<div class="form-group">
				<label>Pilihan</label>
				<input type="hidden" name="No" class="form-control" value="<?php echo $ssw->No ?>">
				<input type="text" name="Pilihan" class="form-control" value="<?php echo $ssw->Pilihan ?>">
			</div>

			<div class="form-group">
				<label>Nilai</label>
				<input type="text" name="Nilai" class="form-control" value="<?php echo $ssw->Nilai?>">
			</div>

		
          
          <button type="reset" class="btn btn-danger">Reset</button>
         <button type="submit" class="btn btn-primary">Simpan</button>

		</form>
	<?php }  ?>
	</section>
</div>