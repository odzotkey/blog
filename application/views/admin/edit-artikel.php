<div class="container">
	<div class="row">
		<div class="col-lg-6 offset-lg-3">

			 <a href="<?=base_url('admin/artikel')?>" class="btn btn-primary mt-4">Kembali</a>
			 <h3 class="mt-4">Edit Artikel</h3>
			 <?php
			 if ($this->session->flashdata('error')) {
			 	?>
			 		<div class="alert alert-danger"><?=$this->session->flashdata('error')?></div>
			 	<?php
			 }
			 ?>
			  
				<?php echo form_open_multipart('admin/update_artikel');?>
				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" name="judul" value="<?=$artikel->judul?>">
					<input type="hidden" class="form-control" name="id" value="<?=$artikel->id?>">
				</div>
				<div class="form-group">
					<label>Isi</label>
					<textarea class="form-control" name="isi"><?=$artikel->isi?></textarea>
				</div>
				<div class="form-group">
					<label>Kategori</label>
					<select class="form-control" name="kategori">
						<?php
						$kategori = $this->db->get('tb_kategori')->result();
						if ($kategori) {
							foreach ($kategori as $key => $value) {
								?>
								<option <?=$artikel->kategori==$value->nama? 'selected' : '' ?> value="<?=$value->nama?>"><?=$value->nama?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Foto</label>
					<input type="file" class="form-control" name="foto">
				</div>
				<div class="form-group">
					  
					<input type="submit" class="btn btn-success" value="Simpan">
				</div>
			</form>

			
		</div>
	</div>
</div>	