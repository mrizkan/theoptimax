<?php include ('inc/header-top.php');?>
<?php include ('inc/header.php');?>

    <!-- Home Design Inner Pages -->
    <div class="ulockd-inner-home">
        <div class="container text-center">
            <div class="row">
                <div class="inner-conraimer-details">
                    <div class="col-md-12">
                        <h1 class="text-uppercase">TEAM</h1>
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
                            <li> <a href="#"> SERVICES </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ulockd-team">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <div class="ulockd-main-title">
                        <h2 class="text-uppercase">OUR <span class="text-thm2">Team</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit necessitatibus maiores fugiat eaque.</p>
                    </div>
                </div>

            </div>
            <div class="row">
                <?php foreach($news as $home_news): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 5%;">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front" style="background: url(<?= UP. $home_news->Image ?>) 0 0 no-repeat;"></div>
                            <div class="back">
                                <div class="back-logo"></div>
                                <h3 class="name"><?= $home_news->NewsTitle ?>s</h3>
<!--                                <h5 class="back-title">Neurologist</h5>-->
                                <p>
                                    <?= $home_news->ShortDescription ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>


        </div>
    </section>





<?php include ('inc/footer-top.php');?>
<?php include ('inc/footer.php');?>