<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Jack Blogger</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?=base_url()?>assets/jack/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?=base_url()?>assets/jack/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?=base_url()?>assets/jack/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?=base_url()?>assets/jack/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?=base_url()?>assets/jack/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="<?=base_url()?>assets/jack/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="<?=base_url()?>assets/jack/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?=base_url('assets/jack/')?>images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="<?=base_url('assets/jack/')?>images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active">
                                 <a href="<?=base_url('page')?>">Home</a>
                              </li>
                              
                              <?php
                              if ($kategori) {
                                 foreach ($kategori as $key => $value) {
                                    ?>
                                      <li>
                                          <a href="<?=base_url('page/kategori/'.$value->slug)?>"><?= ucfirst($value->nama) ?></a>
                                       </li>
                                     
                                    <?php
                                 }
                              }
                              ?>
                              <li>
                                 <a href="<?=base_url('page/about/')?>">About</a>
                              </li>
                              <li>
                                 <a href="#">Contact</a>
                              </li>
                             
                             
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
