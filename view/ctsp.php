<!-- 

    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('view/images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Project Single Post</h1>
            <p class="text-white text-center">
              <a href="index.php">Home</a>
              <span class="mx-2">/</span>
              <span>Project Single</span>
            </p>
          </div>
        </div>
      </div>
    </div> -->




<div class="site-section" style="margin-top: 70px;">
  <div class="container">
    <div class="row">
      <?php
      extract($_REQUEST);
      foreach ($showct as $ctsp) {
        echo '
                <div class="col-md-7 mb-4">
                    <img src="uploaded/' . $ctsp['hinh'] . '" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-4 ml-auto">
                    <h2 class="text-black mb-4">' . $ctsp['ten'] . '</h2>
                    <pclass="mb-5">' . $ctsp['mota'] . ' </p>
                    <span class="bg-primary" style="padding:20px;color:white; " >' . $ctsp['gia'] . 'đ</span>
                    <!--<p><a href="#" class="btn btn-primary rounded-0 py-3 px-5" style="margin-top:20px;">Add to cart</a></p> -->
                </div>

            </div>
        </div>
    </div>';
      } ?>
      <button type="button" class="btn btn-primary rounded-0 py-3 px-5"
       style="margin-bottom:20px;margin-top:-40px;margin-left:965px;" 
       onclick="location.href='index.php?act=addcart&id_sp=<?php echo $ctsp['id_sp'];?>'">Add to cart</button>