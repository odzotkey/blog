<div class="container">
	<div class="row">
		<div class="col-lg-12">

			<h3 class="mt-4">Kategori</h3>  
			  <?php
			 if ($this->session->flashdata('success')) {
			 	?>
			 		<div class="alert alert-success"><?=$this->session->flashdata('success')?></div>
			 	<?php
			 }
			 ?>

			<div class="table-resposive mt-4">
				<table class="table table-striped">
					<tr>
						<th>No</th>
						<th>Nama</th> 	
						<th></th>
					</tr>
					<?php
						if ($kategori) {
							$no=1;
							foreach ($kategori as $key => $value) {
								?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$value->nama?></td> 
									<td>
										<a href="<?=base_url('admin/edit_kategori/'.$value->id)?>">Edit</a>
										<!-- <a onclick="return confirm('Yakin data ini mau di hapus?')" href="<?=base_url('admin/delete_artikel/'.$value->id)?>">Hapus --></a>
									</td>
								</tr>
								<?php
							}
						}
					?>
				</table>
			</div> 
		</div>
	</div>
</div>