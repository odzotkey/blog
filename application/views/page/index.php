      <!-- revolution slider -->
      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="<?=base_url('assets/jack/')?>images/slider_1.png" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="<?=base_url('assets/jack/')?>images/slider_1.png" alt="#" />
                        </div>
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full slider_cont_section">
                    <?= ucwords($artikel1->judul) ?>
                     <p><?= ucfirst($artikel1->isi) ?></p>
                     <?php

                  $str1 = explode(" ", $artikel1->judul);
                  $slug1 = implode("-", $str1);
                     ?>
                     
                        <!-- <a   href="<?=base_url('page/detail/'.$slug1)?>">Baca Selanjutnya</a> -->
                        
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end revolution slider -->
      <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>Blog <span class="orange_color"></span></h3>
                  </div>
               </div>
            </div>
            <?php
            if ($artikel2) {
               foreach ($artikel2 as $key => $value) {
                  $str = explode(" ", $value->judul);
                  $slug = implode("-", $str);
                  ?>
                  <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="<?=base_url('assets/jack/')?>images/<?=$value->foto?>" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4><?= ucwords($value->judul) ?></h4>
                     <h5><?= date_format(date_create($value->tanggal),'d F Y') ?></h5>
                     <p><?= ucfirst(substr($value->isi, 0,300)) ?> <a href="<?=base_url('page/detail/'.$slug)?>" style="font-style: italic;">Baca selanjutnya</a></p>
                  </div>
               </div>
            </div>
                  <?php

               }
               ?>
                <div class="row margin_top_30">
                     <div class="col-md-12">
                        <div class="button_section full center margin_top_30">
                           <a style="margin:0;" href="about.html">Read More</a>
                        </div>
                     </div>
                  </div>
               <?php
            }  

            ?>
            


           
         </div>
      </div>
      <!-- end section -->
      <!-- section --> 
      <div class="section layout_padding dark_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>Tentang</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <img src="<?=base_url('assets/jack/')?>images/marketing_img.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
              
                     <p class="white_font"><?=$profil->tentang?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
     
      <!-- section --> 
     

