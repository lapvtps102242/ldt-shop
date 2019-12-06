
    
    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('view/images/hinh-8.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 ml-auto text-right" data-aos="fade-up">
              <h1>Explore, Discover The Ocean</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
              <p><a href="#" class="btn btn-primary py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('view/images/hinh9.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>Enjoy The Ocean With Your Family</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
              <p><a href="#" class="btn btn-primary py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- END slider -->

    <!-- <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="view/images/hinh.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <span class="text-serif text-primary">Thông Tin</span>
            <h3 class="heading-92913 text-black">Chào mừng bạn đến shop của chúng tôi</h3>
            <p>Shop cung cấp máy tính laptop chính hảng cho người dùng</p>
            <p>Dịch vụ hỗ trợ tốt, bảo hành dài hạn, cung cấp và tư vấn thông tin về các sản phẩm</p>
            <p><a href="#" class="btn btn-primary py-3 px-4">Xem thêm</a></p>
          </div>
        </div>
      </div>
    </div> -->
    <h3 class="heading-92913 text-black text-center" style="margin-top:70px;"  >Danh mục sản phẩm</h3>
    <div class="py-5">
      <div class="container">
        <div class="row">
        <?php
        
          foreach ($dscat as $showcat) 
          {
            $link="index.php?act=shop&idcat=".$showcat['id_loai'];
            echo '
          <div class="col-md-6 col-lg-3 mb-5">
            <div class="service-29283">
              <span class="wrap-icon-39293">
              <!-- <span class="flaticon-yacht"></span> -->
              </span>
              <a href="'.$link.'">
              <img src="uploaded/loai/'.$showcat['img'] .'" alt="Image" class="img-fluid">
              <h3 style="text-align: center; margin-top:40px;"> '.$showcat['name_loai'].'</h3> </a>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p> -->
            </div>
          </div>';
          }
          ?>
          <!-- <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-yacht"></span>
              </span>
              <h3>Máy tính chính hãng</h3>
              <p>Shop nhập máy tính laptop từ các cơ sở ASUS, ....</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-shield"></span>
              </span>
              <h3>Uy tín, chất lượng</h3>
              <p>Luôn có bảo hành, hỗ trợ sửa và vệ sinh máy tính</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-captain"></span>
              </span>
              <h3>Đội ngũ nhân viên tốt</h3>
              <p>Luôn hỗ trợ, tư vấn thông tin hết mình</p>
            </div>
          </div> -->
        </div>
      </div>
    </div>
 
    <div class="site-section bg-image overlay" style="background-image: url('view/images/hinh.jpg');">
      <div class="container">
        <div class="row">
          <div class="col">
            <!-- <div class="counter-39392">
              <h3>349</h3>
              <span>Number of Yacht</span>
            </div> -->
          </div>
          <div class="col">
            <!-- <div class="counter-39392">
              <h3>7000+</h3>
              <span>Customers Satisfied</span>
            </div> -->
          </div>
          <div class="col">
            <!-- <div class="counter-39392">
              <h3>120</h3>
              <span>Number of Staffs</span>
            </div> -->
          </div>
          <div class="col">
            <!-- <div class="counter-39392">
              <h3>493</h3>
              <span>Sea Destinations</span>
            </div> -->
          </div>
          <div class="col">
            <!-- <div class="counter-39392">
              <h3>230</h3>
              <span>Professional Sailors</span>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <!-- <span class="text-serif text-primary">Destination</span> -->
            <h3 class="heading-92913 text-black text-center">Sản phẩm mới</h3>
          </div>
        </div>
        <!-- <a href="'.$link.'";> -->
          <!-- ở dưới -->
          
        <div class="row">
        <?php
          foreach ($dssphome as $showsp) 
          {
            $link = "index.php?act=ctsp&idsp=".$showsp['id_sp'];
            echo '
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
            <!-- ở đây -->
            <a href="'.$link.'">
            <img src="uploaded/'.$showsp['hinh'] .'" alt="Image" class="img-fluid">
              <div class="p-4">
        
                <h3><a href="#"><span class="text-primary"></span>'.$showsp['ten'].'</a></h3> </a>
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
<!-- end -->

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <p><img src="view/images/hinh4.jpg" alt="Image" class="img-fluid"></p>
          </div>
          <div class="col-md-5">
            <!-- <span class="text-serif text-primary">Book Now</span> -->
            <h3 class="heading-92913 text-black">Đăng kí mua hàng</h3>
            <form action="#" class="row">
              <div class="form-group col-md-6">
                <label for="input-1">Họ tên:</label>
                <input type="text" class="form-control" id="input-1">
              </div>
              <div class="form-group col-md-6">
                <label for="input-2">Số điện thoại:</label>
                <input type="text" class="form-control" id="input-2">
              </div>

              <div class="form-group col-md-6">
                <label for="input-3">Địa chỉ:</label>
                <input type="text" class="form-control datepicker" id="input-3">
              </div>
              <div class="form-group col-md-6">
                <label for="input-4">Ngày sinh:</label>
                <input type="text" class="form-control datepicker" id="input-4">
              </div>

              <div class="form-group col-md-12">
                <label for="input-5">Sản phẩm:</label>
                <select name="" id="input-5" class="form-control">
                  <option value="">Motor Yacht</option>
                  <option value="">Hi-Speed Yacht</option>
                  <option value="">Premium Yacht</option>
                  <option value="">Presidential Yacht</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="input-6">Địa chỉ email</label>
                <input type="text" class="form-control" id="input-6">
              </div>

              <div class="form-group col-md-6">
                <label for="input-7">Ngày mua</label>
                <input type="text" class="form-control" id="input-7">
              </div>


              
              <div class="form-group col-md-12">
                <label for="input-8">Ghi chú</label>
                <textarea name="" id="input-8" cols="30" rows="5" class="form-control"></textarea>
              </div>

              <div class="form-group col-md-12">
                <input type="submit" class="btn btn-primary py-3 px-5" value="Đặt hàng">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    

    <!-- <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Team</span>
            <h3 class="heading-92913 text-black text-center">Our Team</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="view/images/person_1.jpg" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="view/images/person_2.jpg" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="view/images/person_3.jpg" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="view/images/person_4.jpg" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div> -->

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <!-- <span class="text-serif text-primary">Testimonial</span> -->
            <h3 class="heading-92913 text-black text-center">Đánh giá</h3>
          </div>
        </div>
        <div class="row">
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Trang web đẹp và chất lượng quá ad ơi =))))</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="view/images/person2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">Vũ Tiến Lập</strong>
                  <span>Designer Web</span>
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

    <div class="site-section bg-image overlay" style="background-image: url('view/images/hinh5.jpg');">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-white">Liên hệ với chúng tôi</h2>
            <p class="lead text-white">SDT1: 090xxxxxxxxxxx   SDT2:090xxxxxxxxx</p>
            <p class="mb-0"><a href="#" class="btn btn-warning py-3 px-5 text-white">Liên hệ</a></p>
          </div>
        </div>
      </div>
    </div>

    
    