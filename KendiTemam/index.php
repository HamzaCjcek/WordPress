  <?php get_header(); ?>



    <div class="container mt-3">
      <h2>Gündem</h2>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <?php $resim1 =get_field('resim1','option');?>
        <img class="logo" src="<?php echo $resim1['url'];?>">

            <div class="carousel-caption">
              <h3>Haber-Başlığı</h3>
              <p>İçeriği</p>
            </div>
          </div>
          <div class="carousel-item">
            <?php $resim2 =get_field('resim2','option');?>
        <img class="logo" src="<?php echo $resim2['url'];?>">

            <div class="carousel-caption">
              <h3>Haber-Başlığı</h3>
              <p>İçeriği</p>
            </div>
          </div>
          <div class="carousel-item">
            <?php $resim3 =get_field('resim3','option');?>
        <img class="logo" src="<?php echo $resim3['url'];?>">
            <div class="carousel-caption">
              <h3>Haber-Başlığı</h3>
              <p>İçeriği</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>



  <div class="container mt-5">
      <div class="row">
          <div class="col-md-12">
              <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                  <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;<?php the_field('news','option'); ?></span></div>
                  <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> <a href="#"><?php the_field('news2','option'); ?> </a> <span class="dot"></span> <a href="#"><?php the_field('news3','option'); ?> </a> <span class="dot"></span> <a href="#"><?php the_field('news4','option'); ?> </a> </marquee>
              </div>
          </div>
      </div>
  </div>
<br>
<br>

      <div class="row">
        <div class="col-md-2">
          <div class="card" style="width: 18rem;">
            <?php $card =get_field('card','option');?>
        <img class="" src="<?php echo $card['url'];?>">
        <div class="card-body">
          <h7 class="card-title">Haber-Başlığı</h7>
          <p class="card-text">İçeriği</p>
          <a href="index2.php" class="btn btn-primary">Haberin Devamına Tıklayın</a>
        </div>

      </div>
    </div><div class="col-1"></div>
        <div class="col-md-2 ">
          <div class="card" style="width: 18rem;">
            <?php $card =get_field('card','option');?>
        <img class="" src="<?php echo $card['url'];?>">
        <div class="card-body">
          <h7 class="card-title">Haber-Başlığı</h7>
          <p class="card-text">İçeriği</p>
          <a href="https://www.cnnturk.com" class="btn btn-primary">Haberin Devamına Tıklayın</a>
        </div>

      </div>
        </div><div class="col-1"></div>
        <div class="col-md-2 ">
          <div class="card" style="width: 18rem;">
            <?php $card =get_field('card','option');?>
        <img class="" src="<?php echo $card['url'];?>">
        <div class="card-body">
          <h7 class="card-title">Haber-Başlığı</h7>
          <p class="card-text">İçeriği</p>
          <a href="https://www.cnnturk.com" class="btn btn-primary">Haberin Devamına Tıklayın</a>
        </div>

      </div>
        </div><div class="col-1"></div>

<br>
        <div class="col-md-3">
          <div class=" w-100 text-left mr-0 rounded p-5" style="float:right;background-color:lightgrey;text-background-color:white">
            <div class="ornek">
                <?php $card =get_field('card','option');?>
              <a href="https://www.cnnturk.com"><img src="<?php echo $card['url'];?>" alt="" style="width:30px;height:30px;"></a>
               <br>
              <p>&#8719;  Altın ve petrolde rüzgar tersine döndü</p>
            </div>
            <hr class="mr-5 mx-5">
            <div class="">
              <?php $card =get_field('card','option');?>
              <a href="https://www.bundle.app"><img src="<?php echo $card['url'];?>" alt="" style="width:30px;height:30px;"></a>
              <br>
              &#8719;    RUSLARI BEKLEYEN 2 TEHLİKE Hitler ve Napolyon'u durdurmuştu
            </div>
            <hr class="mr-5 mx-5">
            <div class="">
                <?php $card =get_field('card','option');?>
              <a href="https://www.haberler.com"><img src="<?php echo $card['url'];?>" alt="" style="width:30px;height:30px;"></a>
              <br>
              &#8719;   İstanbul'da yarından itibaren yoğun kar yağışı bekleniyor, İstanbul Valiliği hangi önlemleri açıkladı?
            </div>

            <hr class="mr-5 mx-5">
            <div class="">
                <?php $card =get_field('card','option');?>
              <a href="https://www.haberler.com"><img src="<?php echo $card['url'];?>" alt="" style="width:30px;height:30px;"></a>
              <br>
              &#8719;   İstanbul'da yarından itibaren yoğun kar yağışı bekleniyor, İstanbul Valiliği hangi önlemleri açıkladı?
            </div>

          </div>

        </div>
      </div>
    </div>

      <br>
      <br>
      <hr>
          <footer>
              <div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
                  <div class="col-12">
                      <div class="row row-2">
                          <div class="col-sm-3 text-md-center">
                              <h5><span> <i class="fa fa-firefox text-light" aria-hidden="true"></i></span><b>&#8719; <?php the_field('footersiteismi','option'); ?></b></h5>
                          </div>
                          <div class="col-sm-3 my-sm-0 mt-5">
                              <ul class="list-unstyled">
                                  <li class="mt-0"><?php the_field('sitebasligi1','option'); ?></li>
                                  <li><?php the_field('sitebasligi1-icerigi','option'); ?></li>
                                  <li><?php the_field('sitebasligi1-icerigi-2','option'); ?></li>
                              </ul>
                          </div>
                          <div class="col-sm-3 my-sm-0 mt-5">
                              <ul class="list-unstyled">
                                  <li class="mt-0"><?php the_field('sitebasligi2','option'); ?></li>
                                  <li><?php the_field('sitebasligi2-icerigi','option'); ?></li>
                                  <li><?php the_field('sitebasligi2-icerigi-2','option'); ?></li>
                              </ul>
                          </div>
                          <div class="col-sm-3 my-sm-0 mt-5">
                              <ul class="list-unstyled">
                                  <li class="mt-0"><?php the_field('sitebasligi3','option'); ?></li>
                                  <li><?php the_field('sitebasligi3-icerigi','option'); ?></li>
                                  <li><?php the_field('sitebasligi3-icerigi-2','option'); ?></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2">
                  <div class="col-12">
                      <div class="row my-4 row-1 no-gutters">
                          <div class="col-sm-3 col-auto text-center"><small>&#8719; <?php the_field('footersiteismi','option'); ?></small></div>
                          <div class="col-md-3 col-auto "></div>
                          <div class="col-md-3 col-auto"></div>
                          <div class="col my-auto text-md-left text-right "> <small> hamzacicek@outlook.com.tr <span> <a href="https://www.bundle.app/breakingNews"> <img src="https://i.imgur.com/TtB6MDc.png" class="img-fluid " width="25"></span></a> <span> <a href="https://www.bundle.app/breakingNews"> <img src="https://i.imgur.com/N90KDYM.png" class="img-fluid " width="25"></a></span></small> </div>
                      </div>
                  </div>
              </div>
          </footer>
      </div>

  </body>
</html>
