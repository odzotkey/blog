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

			 <?php
			 if ($this->session->flashdata('success')) {
			 	?>
			 		<div class="alert alert-success"><?=$this->session->flashdata('success')?></div>
			 	<?php
			 }
			 ?>
			  
				<?php echo form_open_multipart('admin/update_profil');?>
				<div class="form-group">
					<label>Nama web</label>
					<input type="text" name="nama" value="<?=$profil->nama?>" class="form-control">
				</div>
				<div class="form-group">
					<label>Tentang</label>
					<textarea name="tentang" class="form-control"><?=$profil->tentang?></textarea>
					<input type="hidden" class="form-control" name="id" value="<?=$profil->id?>">
				</div>
				<div class="form-group">
					<label>Telepon</label>
					<input type="text" name="telepon" value="<?=$profil->telepon?>" class="form-control">
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" value="<?=$profil->email?>" class="form-control">
				</div>
				
				<div class="form-group">
					  
					<input type="submit" class="btn btn-success" value="Simpan">
				</div>
			</form>

			
		</div>
	</div>
</div>	