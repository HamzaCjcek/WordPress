<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',true,'right'); ?></title>
    <?php wp_head(); ?>
  </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="#">
           <span class="iconify" data-icon="emojione-v1:newspaper"></span>

       </a>

       <a class="navbar-brand" href="#"><?php the_field('baslik','option'); ?></a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <?php wp_nav_menu(array('theme_location' =>'anamenu','menu_class' => 'ana-menusu'));?>
           <div class="navbar-nav ana-menusu">
           </div>
       </div>

       <div class="navbar-nav ms-auto">

<iframe id="Piyasalar" name="beterbocekler2.tr.gg" src="https://www.ücretsiz.com/piyasalar.html" style="width:400px; height:70px;" frameborder="0"></iframe>
       </div>

   </nav>

   <div class="container">
       <h2><?php the_field('carouselbaslik','option'); ?></h2>
       <div id="demo" class="carousel slide" data-ride="carousel">
           <ul class="carousel-indicators">
               <li data-target="#demo" data-slide-to="0" class="active"></li>
               <li data-target="#demo" data-slide-to="1"></li>
               <li data-target="#demo" data-slide-to="2"></li>
           </ul>
           <div class="carousel-inner">
               <div class="carousel-item active">
                   <?php $foto=get_field("foto","option"); ?>
                   <img class="logo" src="<?php echo $foto['url']; ?>">

                   <div class="carousel-caption">
                       <h3><?php the_field('foto1baslik','option'); ?></h3>
                       <p><?php the_field('foto1metin','option'); ?></p>
                   </div>
               </div>
               <div class="carousel-item">
                   <?php $foto2=get_field("foto2","option"); ?>
                   <img class="logo" src="<?php echo $foto2['url']; ?>">

                   <div class="carousel-caption">
                       <h3><?php the_field('foto2baslik','option'); ?></h3>
                       <p><?php the_field('foto2metin','option'); ?></p>
                   </div>
               </div>
               <div class="carousel-item">
                   <?php $foto3=get_field("foto3","option"); ?>
                   <img class="logo" src="<?php echo $foto3['url']; ?>">
                   <div class="carousel-caption">
                       <h3><?php the_field('foto3baslik','option'); ?></h3>
                       <p><?php the_field('foto3metin','option'); ?></p>
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
   </div>
   <hr>
   <div class="ml-5 mr-5">
       <div class="row">
           <div class="col-md-12">
               <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                   <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;<?php the_field('newsbaslik','option'); ?></span></div>
                   <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> <a href="#"><?php the_field('haber1','option'); ?></a> <span class="dot"></span> <a href="#"><?php the_field('haber2','option'); ?></a> <span class="dot"></span> <a href="#"><?php the_field('haber3','option'); ?></a> </marquee>
               </div>
           </div>
       </div>
   </div>
   <hr>

   <div class="container mt-5 mb-3">
       <div class="row">
           <div class="col-md-4">
               <div class="card p-3 mb-2">
                   <div class="d-flex justify-content-between">
                       <div class="d-flex flex-row align-items-center">
                           <div class="icon"> <i class=""><span class="iconify" data-icon="emojione-v1:newspaper"></span>
                               </i> </div>
                           <div class="ms-2 c-details">
                               <h6 class="mb-0">&nbsp;<?php the_field('site_basligi','option'); ?></h6> <span>&nbsp;1 days ago</span>
                           </div>
                       </div>
                       <div class="badge"> <span><a href="#"><?php the_field('haberbuttonu','option'); ?></a></span> </div>
                   </div>
                   <div class="mt-5">
                       <?php $cardfoto=get_field("cardfoto","option"); ?>
                       <img src="<?php echo $cardfoto['url']; ?>" alt="" style="width:100%;height:60%;"><b><?php the_field('haber_basligi','option'); ?></b><br><p><?php the_field('ozet_icerik','option'); ?></p>
                       <div class="mt-5">
                           <div class="progress">
                               <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="mt-3"> <span class="text1"> <span class="text2">Haber İlgi Oranı</span></span> </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-4">
               <div class="card p-3 mb-2">
                   <div class="d-flex justify-content-between">
                       <div class="d-flex flex-row align-items-center">
                           <div class="icon"> <i class=""></i><span class="iconify" data-icon="simple-icons:bbc"></span>
                           </div>
                           <div class="ms-2 c-details">
                               <h6 class="mb-0">&nbsp;<?php the_field('siteismi2','option'); ?></h6> <span>&nbsp;4 days ago</span>
                           </div>
                       </div>
                       <div class="badge"> <span><a href=""><?php the_field('haberbuttonu2','option'); ?></a></span> </div>
                   </div>
                   <div class="mt-5">
                       <?php $cardfoto2=get_field("cardfoto2","option"); ?>
                       <img src="<?php echo $cardfoto2['url']; ?>" alt="" style="width:100%;height:60%;"><b><?php the_field('haber_basligi2','option'); ?></b><br><p><?php the_field('ozet_icerik2','option'); ?></p>
                       <div class="mt-5">
                           <div class="progress">
                               <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="mt-3"> <span class="text1">Haber İlgi Oranı<span class="text2"></span></span> </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-4">
               <div class="card p-4 mb-3">
                   <div class="d-flex justify-content-between">
                       <div class="d-flex flex-row align-items-center">
                           <div class="icon"> <i class=""><span class="iconify" data-icon="simple-icons:cnn"></span>
                               </i> </div>
                           <div class="ms-2 c-details">
                               <h6 class="mb-0">&nbsp;<?php the_field('siteismi3','option'); ?></h6> <span>&nbsp;2 days ago</span>

                           </div>
                       </div>
                       <a href="#"></a>
                       <div class="badge"> <span><a href="#"><?php the_field('haberbuttonu3','option'); ?></a></span> </div>
                   </div>
                   <div class="mt-5">
                       <?php $cardfoto3=get_field("cardfoto3","option"); ?>
                       <img src="<?php echo $cardfoto3['url']; ?>" alt="" style="width:100%;height:60%;"><b><?php the_field('haber_basligi_3','option'); ?></b><br> <p><?php the_field('ozet_icerik_3','option'); ?></p>

                       <div class="mt-5">
                           <div class="progress">
                               <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="mt-3"> <span class="text1"><span class="text2">Haber İlgi Oranı</span></span> </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <br>

   </body>
</html>
