<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="<?=base_url()?>assets/jack/css/bootstrap.min.css">
     
</head>
<body>
  <?php
  if ($this->session->userdata('user')) {
    ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    
  <a class="navbar-brand" href="<?=base_url('admin')?>">Admin </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('admin/artikel')?>">Artikel <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/kategori')?>">Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('admin/profil')?>">Profil</a>
      </li>
     
    </ul>
    <div class="float-right"><a href="<?=base_url('login/logout')?>">Logout</a></div>
  </div>
  </div>
</nav>
    <?php
  }

  ?>