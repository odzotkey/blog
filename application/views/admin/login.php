<div class="container">
	<div class="row mt-4" >
		<div class="col-lg-4 col-sm-12 col-md-12 offset-lg-4">
			<center><h3>Login</h3></center>
			 <?php
			 if ($this->session->flashdata('error')) {
			 	?>
			 		<div class="alert alert-danger"><?=$this->session->flashdata('error')?></div>
			 	<?php
			 }
			 ?>

			<form method="post" action="<?=base_url('login/proses')?>">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					 
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
			</form>
		</div>
	</div>
</div>