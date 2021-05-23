
      <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>Blog <span class="orange_color"><?= ucwords($title) ?></span></h3>
                  </div>
               </div>
            </div>
            <?php
            if ($artikel) {
               foreach ($artikel as $key => $value) {
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
                     <p><?= ucfirst($value->isi) ?> <a href="<?=base_url('page/detail/'.$slug)?>" style="font-style: italic;font-weight: bold;">Baca selanjutnya</a></p>
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
            }else{
               ?>
                  <center><h3>Artikel tidak di temukan</h3></center>
               <?php
            }

            ?>
            


           
         </div>
      </div>
      <!-- end section -->

      

    