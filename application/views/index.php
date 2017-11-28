<?php include ('inc/header-top.php');?>
<?php include ('inc/header.php');?>


<!-- Home Design -->
<div class="ulockd-home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ulockd-pmz">
                <div class="cd-hero">
                    <ul class="cd-hero-slider autoplay">
                        <li class="selected">
                            <div class="cd-full-width">
                                <h2>Welcome to Optipix.</h2>
                                <!--<h2> with Optipix.</h2>-->
                                <h4>Endless, Without Limit.</h4>
                                <a href="#0" class="cd-btn btn btn-default ulockd-btn-thm2">Our Products</a>
                                <a href="#0" class="cd-btn btn btn-default ulockd-btn-styledark">Get Quote</a>
                            </div> <!-- .cd-full-width -->
                        </li>

                        <li>
                            <div class="cd-full-width">
                                <h1>Your Satisfaction Our Goal.</h1>
                                <h2>Chance For Change.</h2>
                                <a href="#0" class="cd-btn btn btn-default ulockd-btn-thm2">About Us</a>
                                <a href="#0" class="cd-btn btn btn-default ulockd-btn-thm2">Learn More</a>
                            </div> <!-- .cd-half-width -->
                        </li>

                        <li>

                            <!--<div class="cd-full-width">
                                <h1>We Are <span class="color-nightblue"> Optimax </span></h1>
                                <h2>We Are a Helping Hand.</h2>
                                <h4>Best Health Care System has gladly served</h4>
                                <a href="#0" class="cd-btn btn btn-default ulockd-btn-thm2">Our Mission</a>
                                <a href="#" class="cd-btn btn btn-default ulockd-btn-thm2">Learn More</a>
                            </div>--> <!-- .cd-full-width -->

                        </li>
                    </ul> <!-- .cd-hero-slider -->

                    <div class="cd-slider-nav">
                        <nav>
                            <span class="cd-marker item-1"></span>

                            <ul>
                                <li class="selected"><a href="#0"></a></li>
                                <li><a href="#0"></a></li>
                                <li><a href="#0"></a></li>
                            </ul>
                        </nav>
                    </div> <!-- .cd-slider-nav -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our About -->
<section class="ulockd-about2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <div class="ulock-about">
                    <h2 class="title-bottom ulockd-mrgn630">About <span class="text-thm2"> Optimax</span></h2>
                    <p>Optimax Is a Health & Medical . Now Optimax  Is a Biggest organizations In This Globe. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo repudiandae sunt delectus praesentium adipisci voluptatem sed, consectetur! Optio quis alias necessitatibus quidem dolore est nobis iusto, doloremque, velit vel, eligendi excepturi iure quas dignissimos eius.</p>
                    <p>Consectetur adipisicing elit. Assumenda in, animi facere illum culpa autem minima nostrum doloribus dignissimos!</p>
                    <h4>History Of Optimax  </h4>
                    <p>Optimax Health & Medical html  can change your online life. You can make excellent site with usine Optimax. There Consectetur adipisicing elit. Nemo repudiandae sunt delectus praesentium adipisci voluptatem sed, consectetur! Optio quis alias necessitatibus quidem.</p>
                    <button type="submit" class="btSrn btn-default ulockd-btn-thm2">Read More</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-5">
                <div class="ulockd-about-box ulockd-mrgn1260">
                    <div class="ab-thumb">
                        <img class="img-responsive img-whp" src="<?= base_url('media/images/') ?>1.jpg" alt="1.jpg">
                    </div>
                    <p class="text-center ulockd-mrgn1210">Optimax Health & Medical html  can change your online life. You can make excellent site with usine Optimax.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Divider -->
<section class="ulockd-divider bgc-nightblue">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="color-white ulockd-mrgn120">The Optimax</h1>
                <p class="color-white">Sed ut Perspiciatis Unde Omnis Iste Sed ut sit voluptatem accusan tium </p>
            </div>
            <div class="col-md-4 text-center tal-smd">
                <button type="submit" class="btn btn-lg ulockd-btn-white ulockd-mrgn1225">Products</button>
            </div>
        </div>
    </div>
</section>



<!-- Our Team -->
<section class="ulockd-team bgc-icebluelight">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="ulockd-main-title">
                    <h2 class="text-uppercase">Latest <span class="text-thm2">Products</span></h2>
                    <p>Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan.</p>
                    <div class="mt-separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs team-tab" role="tablist">
                <?php foreach($products as $k=>$pro): ?>
                    <li role="presentation" <?= ($k==0)?'class="active"':''; ?>>
                        <a href="#team<?= $k ?>" aria-controls="team<?= $k ?>" role="tab" data-toggle="tab">
                            <img src="<?= UP.$pro->Image ?>" alt="<?= $pro->Image ?>" style="width: 90px;height: 90px">
                        </a>
                    </li>
                <?php endforeach; ?>


                </ul>
            </div>
        </div>
        <div class="row">
            <!-- Tab panes -->
            <div class="tab-content">
        <?php foreach($products as $x=>$pro_data): ?>
                <div role="tabpanel" class="tab-pane <?= ($x==0)?'active':''; ?> team<?= $x ?>" id="team<?= $x ?>">
                    <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                        <div class="ulockd-team-member">
                            <div class="team-thumb">
                                <img class="img-responsive img-whp" src="<?= UP.$pro_data->Image ?>" alt="1.jpg">
                                <div class="team-overlay">
                                    <ul class="list-inline team-icon style2">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details text-left">
                                <h3><?=$pro_data->ProductTitle ?> <small class="text-thm2"></small> </h3>
                                <a href="<?= base_url('Product-Details/').url_title($pro->ProductTitle).'/'.$pro->ProductId ?>" data-toggle="modal" class="btn btn-default ulockd-btn-thm2"> See Product </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-8">
                        <div class="team-overview">
                            <h3 class="tm-ovv-title">Overview for <?=$pro_data->ProductTitle ?></h3>
                            <p>
                                <?=$pro_data->ShortDescription ?>
                            </p>


                        </div>
                    </div>

                </div>
        <?php endforeach; ?>


            </div>
        </div>
    </div>
</section>



<!-- Our Blog -->
<section class="ulockd-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="ulockd-main-title">
                    <h2 class="text-uppercase">LATEST <span class="text-thm2">NEWS</span></h2>
                    <p>Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan.</p>
                    <div class="mt-separator"></div>
                </div>
            </div>
        </div>
        <div class="row">

           <?php foreach($news as $home_news): ?>
            <div class="col-sm-6 col-md-4">
                <article class="ulockd-blog-post">
                    <div class="post-thumb">
                        <a href="<?= base_url('Services') ?>">
                             <img class="img-responsive img-whp" src="<?= UP. $home_news->Image ?>" alt="<?=$home_news->Image ?>">
                        </a>
                    </div>
                    <div class="bp-details one text-left">
                        <a href="<?= base_url('Services') ?>">
                            <h3 class="post-title"><?= $home_news->NewsTitle ?></h3>
                        </a>
                        <p><?= character_limiter($home_news->ShortDescription,150) ?></p>
<!--                        <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>-->
                    </div>
                </article>
            </div>
    <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Our Partner -->
<section class="ulockd-partner">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?= base_url('media/images/') ?>partner1.png" alt="partner1.png"></div></div>
            <div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?= base_url('media/images/') ?>partner2.png" alt="partner2.png"></div></div>
            <div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?= base_url('media/images/') ?>partner3.png" alt="partner3.png"></div></div>
            <div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?= base_url('media/images/') ?>partner4.png" alt="partner4.png"></div></div>
            <div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?= base_url('media/images/') ?>partner5.png" alt="partner5.png"></div></div>
            <div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?= base_url('media/images/') ?>partner6.png" alt="partner6.png"></div></div>
        </div>
    </div>
</section>

<?php include ('inc/footer-top.php');?>
<?php include ('inc/footer.php');?>