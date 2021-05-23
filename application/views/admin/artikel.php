<div class="container">
	<div class="row">
		<div class="col-lg-12">

			<h3 class="mt-4">Artikel</h3> <a href="<?=base_url('admin/add_artikel')?>" class="btn btn-primary">Tambah artikel</a>
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
						<th>Judul</th>
						<th>Isi</th>
						<th>Kategori</th>
						<th>Author</th>
						<th>Tanggal</th>
						<th>Foto</th>	
						<th></th>
					</tr>
					<?php
						if ($artikel) {
							$no=1;
							foreach ($artikel as $key => $value) {
								?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$value->judul?></td>
									<td><?=substr($value->isi, 0,100) ?></td>
									<td><?=$value->kategori?></td>
									<td><?=$value->author?></td>
									<td><?=$value->tanggal?></td>
									<td><img src="<?=base_url('assets/jack/')?>images/<?=$value->foto?>" style="width:50px;height: 50px;"></td>
									<td>
										<a href="<?=base_url('admin/edit_artikel/'.$value->id)?>">Edit</a>
										<a onclick="return confirm('Yakin data ini mau di hapus?')" href="<?=base_url('admin/delete_artikel/'.$value->id)?>">Hapus</a>
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