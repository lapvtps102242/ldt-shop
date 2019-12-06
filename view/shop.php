
<!-- 
      <div class="intro-section" style="background-image: url('view/images/hero_2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>Our Services</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
              <p><a href="#" class="btn btn-primary py-3 px-5">Contact</a></p>
            </div>
          </div>
        </div>
      </div> -->

     

    <div class="py-5">
      <div class="container">
      <?php
        //   foreach ($dscat as $shownews_cata) 
        //   {
            
        //     echo '
        // <div class="text">
        //     <span class="h4 d-block" style="float: left;"> '.$shownews_cata['name_loai'].'</span>
        //     </div><br>
        //     ';
        //   }
          ?>

        <div class="row" style="margin-top: 70px;" >

        

        <?php
          foreach ($showall as $showsp ) 
          {
            $link = "index.php?act=ctsp&idsp=".$showsp['id_sp'];
            echo '
            <div class="col-md-6 col-lg-3 mb-4">
            <div class="service-39381">
            <!-- ở đây -->
            <a href="'.$link.'">
            <img src="uploaded/'.$showsp['hinh'] .'" alt="Image" class="img-fluid">
              <div class="p-4">
        
                <h3><a href="#"><span class="text-primary"></span> '.$showsp['ten'].'</a></h3> </a>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    '.$showsp['ngaynhap'].'
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary">'.$showsp['gia'].'đ</span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>';
          }
          ?>
        </div>
      </div>
    </div>

    
    <!-- <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Testimonial</span>
            <h3 class="heading-92913 text-black text-center">What Customer Saying...</h3>
          </div>
        </div>
        <div class="row">
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="view/images/person_3_sq.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">John Doe</strong>
                  <span>CEO and Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="view/images/person_4_sq.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">John Doe</strong>
                  <span>CEO and Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="view/images/person_3_sq.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">John Doe</strong>
                  <span>CEO and Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-image overlay" style="background-image: url('view/images/hero_2.jpg');">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-white">Get In Touch With Us</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p class="mb-0"><a href="#" class="btn btn-warning py-3 px-5 text-white">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>

    
   -->