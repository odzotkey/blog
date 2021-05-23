<div class="container">
	<div class="row">
		<div class="col-lg-6 offset-lg-3">

			 <a href="<?=base_url('admin/kategori')?>" class="btn btn-primary mt-4">Kembali</a>
			 <h3 class="mt-4">Edit Kategori</h3>
			 <?php
			 if ($this->session->flashdata('error')) {
			 	?>
			 		<div class="alert alert-danger"><?=$this->session->flashdata('error')?></div>
			 	<?php
			 }
			 ?>
			  
				<?php echo form_open_multipart('admin/update_kategori');?>
				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" name="nama" value="<?=$kategori->nama?>">
					<input type="hidden" class="form-control" name="id" value="<?=$kategori->id?>">
				</div>
				
				<div class="form-group">
					  
					<input type="submit" class="btn btn-success" value="Simpan">
				</div>
			</form>

			
		</div>
	</div>
</div>	