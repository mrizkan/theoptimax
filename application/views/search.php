<?php include ('inc/header-top.php');?>
<?php include ('inc/header.php');?>

<!-- Home Design Inner Pages -->
<div class="ulockd-inner-home">
    <div class="container text-center">
        <div class="row">
            <div class="inner-conraimer-details">
                <div class="col-md-12">
                    <h1 class="text-uppercase">Our SHOP</h1>
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
                        <li><a href="#"> HOME </a></li>
                        <li><a href="#"> > </a></li>
                        <li> <a href="#"> OUR SHOP </a> </li>
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
                <h2>Our Product</h2>
                <p>Bclinico  Shopping Store, Choosen your item form out shop page.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-12 text-center">
                
                <div class="row ulockd-mrgn1260">


                    <?php foreach($products as $k=>$pro):  ?>
                    <div class="col-sm-6 col-md-4 col-lg-4 clearfix">
                        <div class="ulockd-shop-item">
                            <div class="ulockd-product-img">
                                <img class="img-responsive img-whp" src="<?= UP.$pro->Image ?>" alt="3.jpg">

                            </div>
                            <div class="ulockd-product-details">
                                <a href="<?= base_url('Product-Details/').url_title($pro->ProductTitle).'/'.$pro->ProductId ?>">
                                    <h3><?= $pro->ProductTitle ?></h3>
                                </a>
                                <p><?= character_limiter($pro->ShortDescription,50); ?></p>
                                <a class="btn btn-lg ulockd-btn-styledark hvr-bounce-to-right" href="<?= base_url('Product-Details/').url_title($pro->ProductTitle).'/'.$pro->ProductId ?>">View More</a>
                            </div>
                        </div>
                    </div>
                 <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-12">
                <nav aria-label="Page navigation navigation-lg">
                    <ul class="pagination">
                        <li>
<!--                            <a href="#" aria-label="Previous">-->
<!--                                <span aria-hidden="true">PREV</span>-->
<!--                            </a>-->
                        </li>
<!--                        <li class="active"><a href="#">1</a></li>-->
<!--                        <li><a href="#">2</a></li>-->
<!--                        <li><a href="#">3</a></li>-->
<!--                        <li><a href="#">4</a></li>-->
<!--                        <li><a href="#">5</a></li>-->
                        <?= $links ?>
                        <li>
<!--                            <a href="#" aria-label="Next">-->
<!--                                <span aria-hidden="true">NEXT</span>-->
<!--                            </a>-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>



<?php include ('inc/footer-top.php');?>
<?php include ('inc/footer.php');?>