
      <!-- footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="#"><img src="<?=base_url('assets/jack/')?>images/footer_logo.png" alt="#" /></a>
                  <ul class="contact_information">
                    
                     <li><span><img src="<?=base_url('assets/jack/')?>images/phone_icon.png" alt="#" /></span><span class="text_cont"><?=$profil->telepon?></span></li>
                     <li><span><img src="<?=base_url('assets/jack/')?>images/mail_icon.png" alt="#" /></span><span class="text_cont"><?=$profil->email?></span></li>
                  </ul>
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="footer_links">
                     <h3>Kategori</h3>
                     <ul>

                        
                         <?php
                              if ($kategori) {
                                 foreach ($kategori as $key => $value) {
                                    ?>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>  <a href="<?=base_url('page/kategori/'.$value->slug)?>"><?= ucfirst($value->nama) ?></a>
                                       </li>
                                     
                                    <?php
                                 }
                              }
                              ?>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6" style="display: none;">
                  <div class="footer_links">
                     <h3>Instagram</h3>
                     <ol>
                        <li><img class="img-responsive" src="<?=base_url('assets/jack/')?>images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="<?=base_url('assets/jack/')?>images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="<?=base_url('assets/jack/')?>images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="<?=base_url('assets/jack/')?>images/footer_blog.png" alt="#" /></li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6" style="display: none;">
                  <div class="footer_links">
                     <h3>Contact us</h3>
                     <form action="index.html">
                        <fieldset>
                           <div class="field">
                              <input type="text" name="name" placeholder="Your Name" required="" />
                           </div>
                           <div class="field">
                              <input type="email" name="email" placeholder="Email" required="" />
                           </div>
                           <div class="field">
                              <input type="text" name="subject" placeholder="Subject" required="" />
                           </div>
                           <div class="field">
                              <textarea placeholder="Message"></textarea>
                           </div>
                           <div class="field">
                              <div class="center">
                                 <button class="reply_bt">Send</button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © <?=date('Y')?> </p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?=base_url()?>assets/jack/js/jquery.min.js"></script>
      <script src="<?=base_url()?>assets/jack/js/popper.min.js"></script>
      <script src="<?=base_url()?>assets/jack/js/bootstrap.bundle.min.js"></script>
      <script src="<?=base_url()?>assets/jack/js/jquery-3.0.0.min.js"></script>
      <script src="<?=base_url()?>assets/jack/js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="<?=base_url()?>assets/jack/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?=base_url()?>assets/jack/js/custom.js"></script>
   </body>
</html>