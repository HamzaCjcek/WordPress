<footer>
    <?php $logo=get_field("logo","option"); ?>

    <div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
        <div class="col-12">
            <div class="row row-2">
                <div class="col-sm-3 text-md-center">
                    <h5><span> <i class="fa fa-firefox text-light" aria-hidden="true"></i></span><b>&#8719;<?php the_field('site_ismi','option'); ?></b></h5>
                </div>
                <div class="col-sm-3 my-sm-0 mt-5">
                    <ul class="list-unstyled">
                        <li class="mt-0"><?php the_field('site_metin_sol','option'); ?></li>
                        <li><?php the_field('site_metin_sol_2','option'); ?></li>
                        <li><?php the_field('site_metin_sol_3','option'); ?></li>
                    </ul>
                </div>
                <div class="col-sm-3 my-sm-0 mt-5">
                    <ul class="list-unstyled">
                        <li class="mt-0"><?php the_field('site_metin_orta','option'); ?></li>
                        <li><?php the_field('site_metin_orta_2','option'); ?></li>
                        <li><?php the_field('site_metin_orta_3','option'); ?></li>
                    </ul>
                </div>
                <div class="col-sm-3 my-sm-0 mt-5">
                    <ul class="list-unstyled">
                        <li class="mt-0"><?php the_field('site_metin_sag','option'); ?></li>
                        <li><?php the_field('site_metin_sag_2','option'); ?></li>
                        <li><?php the_field('site_metin_sag_3','option'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2">
        <div class="col-12">
            <div class="row my-4 row-1 no-gutters">
                <div class="col-sm-3 col-auto text-center"><small>&#8719;<?php the_field('site_ismi_2','option'); ?></small></div>
                <div class="col-md-3 col-auto "></div>
                <div class="col-md-3 col-auto"></div>
                <div class="col my-auto text-md-left text-right "> <small> <a href="mailto:<?php the_field('mail','option'); ?>"><?php the_field('mail','option'); ?></a>

                        <?php $facebook= get_field('facebook','option'); ?>
                        <?php $twitter= get_field('twitter','option'); ?>
                        <?php $instagram= get_field('instagram','option'); ?>
                        <?php  if ($facebook):?>
                            <span> <a href="https://tr-tr.facebook.com/"> <img src="<?php echo $facebook['url']; ?>" class="img-fluid " width="25"></span></a>
                        <?php endif;  ?>
                        <?php  if ($twitter):?>
                            <span> <a href="https://twitter.com/?lang=tr"> <img src="<?php echo $twitter['url']; ?>" class="img-fluid " width="25"></a></span>
                        <?php endif;  ?>
                        <?php  if ($instagram):?>
                            <span> <a href="https://www.instagram.com/?hl=tr"> <img src="<?php echo $instagram['url']; ?>" class="img-fluid " width="25"></a></span>
                        <?php endif;  ?>


                    </small>
                </div>
            </div>
        </div>
    </div>
</footer>