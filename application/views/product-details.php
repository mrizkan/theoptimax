<?php include ('inc/header-top.php');?>
<?php include ('inc/header.php');?>

<!-- Home Design Inner Pages -->
<div class="ulockd-inner-home">
    <div class="container text-center">
        <div class="row">
            <div class="inner-conraimer-details">
                <div class="col-md-12">
                    <h1 class="text-uppercase">PRODUCT DETAILS</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Home Design Inner Pages -->
<div class="ulockd-inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ulockd-icd-layer">
                    <ul class="list-inline ulockd-icd-sub-menu">
                        <li><a href="/"> HOME </a></li>
                        <li><a href="#"> > </a></li>
                        <li> <a href="javascript::"> <?= $details->ProductTitle ?></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Shop -->
<section class="ulockd-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                <h2><?= $details->ProductTitle ?></h2>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="row ulockd-mrgn1260">
                    <div class="col-sm-6 col-md-6 col-lg-5 clearfix">
                        <div class="ulockd-product-details-img">
                            <img class="img-responsive img-whp" src="<?= UP.$details->Image ?>" alt="<?= UP.$details->Image ?>">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-7 clearfix">
                        <div class="ulockd-product-details">



                            <p>
                                <?= $details->Description ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row ulockd-mrgn1260">
<?php foreach($related_products as $r_product):  ?>
            <div class="col-sm-6 col-md-6 col-lg-3 clearfix">
                <div class="ulockd-shop-item">
                    <div class="ulockd-product-img">
                        <img class="img-responsive img-whp" src="<?= UP.$r_product->Image ?>" alt="3.jpg">

                    </div>
                    <div class="ulockd-product-details">


                        <h3><?= character_limiter($r_product->ProductTitle,19) ?></h3>
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum!</p>-->
                        <a class="btn btn-lg ulockd-btn-styledark hvr-bounce-to-right" href="<?= base_url('Product-Details/').url_title($r_product->ProductTitle).'/'.$r_product->ProductId ?>">View More</a>
                    </div>
                </div>
            </div>
<?php endforeach; ?>
        </div>
    </div>
</section>


<?php include ('inc/footer-top.php');?>
<?php include ('inc/footer.php');?>