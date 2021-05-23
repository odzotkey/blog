 <div class="section layout_padding blog_blue_bg light_silver">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="heading">
                     <h3>Blog</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="full">
                     <div class="big_blog">
                        <img style="width: 100%" class="img-responsive" src="<?=base_url('assets/jack/')?>images/<?=$artikel->foto?>" alt="#" />
                     </div>
                     <div class="blog_cont_2">
                        <h3><?= ucwords($artikel->judul) ?></h3>
                        <p class="sublittle"><?= date_format(date_create($artikel->tanggal),'d F Y') ?></p>
                        <p><?= ucfirst($artikel->isi) ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
       <!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4 style="border-bottom: solid #333 1px;">Comments / <?= count($comment) ?></h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_blog_line">
                    <?php

                     if ($comment) {
                        foreach ($comment as $key => $value) {
                           ?>
                            <div class="row">
                        <div class="col-md-1">
                           <img src="<?=base_url('assets/jack/')?>images/person_8x10.png" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3><?= ucfirst($value->nama) ?></h3>
                              <h4>Posted on <?= date_format(date_create($value->tanggal),'D F Y H:i') ?></h4>
                              <p><?= ucfirst($value->comment) ?></p>
                           </div>
                        </div>
                        
                     </div>
                           <?php
                        }
                     }

                    ?>
                  </div>
              
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 margin_top_30">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4>Post : Your Comment</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form method="post" action="<?=base_url('page/comment/'.$this->uri->segment(3))?>">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="nama" placeholder="Name" required="#" />
                                    <input type="email" name="email" placeholder="Email" required="#" />
                                    <input type="hidden" name="id_post" value="<?=$artikel->id ?>" placeholder="Name" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea name="comment" placeholder="Comment"></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button>Send</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->