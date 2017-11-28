<body>
<div class="wrapper">
    <div class="preloader"></div>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="social-linked">
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="welcm-ht text-center">
                        <p class="ulockd-welcntxt">Welcome To <span class="color-black33">The Optimax</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline text-right tac-smd">


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                    <div class="ulockd-welcm-hmddl tac-md">
                        <a href="index.html" class="ulockd-main-logo"><img src="<?= base_url('media/images/') ?>header-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                    <div class="ulockd-ohour-info style2 mb305-xsd text-center">
                        <div class="ulockd-icon text-thm2"><span class="flaticon-email-filled-closed-envelope"></span></div>
                        <div class="ulockd-info">
                            <h4>Mail Us</h4>
                            <p class="ulockd-addrss"><strong>Email:</strong> info@optimax.lk</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                    <div class="ulockd-ohour-info style2 text-center">
                        <div class="ulockd-icon text-thm2"><span class="flaticon-old-handphone"></span></div>
                        <div class="ulockd-info">
                            <h4>Call Us</h4>
                            <p class="ulockd-addrss">+94 112 337 858</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                    <div class="ulockd-ohour-info style2 text-center">
                        <div class="ulockd-icon text-thm2"><span class="flaticon-home"></span></div>
                        <div class="ulockd-info">
                            <h4>Address</h4>
                            <p>#94 First Floor, Prince Street, Colombo 11.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Styles -->
    <header class="header-nav">
        <div class="main-header-nav navbar-scrolltofixed">
            <div class="container">
                <nav class="navbar navbar-default bootsnav menu-style1">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->

                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>

                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>

                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-left" data-in="bounceIn">
                            <li>
                                <a href="<?= base_url('Home') ?>" class="dropdown-toggle active" data-toggle="dropdown">Home</a>

                            </li>
                            <li>
                                <a href="<?= base_url('About-Us') ?>" class="dropdown-toggle" data-toggle="dropdown">About Us</a>

                            </li>
                            <li>
                                <a href="<?= base_url('Services') ?>" class="dropdown-toggle" data-toggle="dropdown">Service</a>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opticals</a>
                                <ul class="dropdown-menu">
                        <?php foreach($menu_op as $op_menu): ?>


                                    <li class="dropdown">
                                        <a href="<?= base_url('Products/'.url_title($op_menu->CategoryTitle).'/'.$op_menu->CategoryId) ?>" class="dropdown-toggle" data-toggle="dropdown"><?= $op_menu->CategoryTitle ?> </a>

                                       <?php
                                       if(count($op_menu->sub)>0){
                                           ?>
                                           <ul class="dropdown-menu">
                                           <?php foreach($op_menu->sub as $op_menu_sub): ?>
                                               <li>
                                                   <a href="<?= base_url('Product/'.url_title($op_menu->CategoryTitle).'/'.url_title($op_menu_sub->SubCategoryTitle).'/'.$op_menu_sub->SubCategoryId) ?>">
                                                       <img src="<?= UP.$op_menu_sub->Image ?>" style="width: 32px;height: 32px;">
                                                       <?= $op_menu_sub->SubCategoryTitle ?>
                                                   </a>
                                               </li>
                                           <?php endforeach; ?>

                                           </ul>

                                           <?php
                                       }
                                       ?>

                                    </li>


                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diabetic Foot Care</a>
                                <ul class="dropdown-menu">
                                    <?php foreach($menu_dfc as $dfc_menu): ?>


                                        <li class="dropdown">
                                            <a href="<?= base_url('Products/'.url_title($dfc_menu->CategoryTitle).'/'.$dfc_menu->CategoryId) ?>" class="dropdown-toggle" data-toggle="dropdown"><?= $op_menu->CategoryTitle ?> </a>

                                            <?php
                                            if(count($dfc_menu->sub)>0){
                                                ?>
                                                <ul class="dropdown-menu">
                                                    <?php foreach($dfc_menu->sub as $dfc_menu_sub): ?>
                                                        <li>
                                                            <a href="<?= base_url('Product/'.url_title($dfc_menu->CategoryTitle).'/'.url_title($dfc_menu_sub->SubCategoryTitle).'/'.$dfc_menu_sub->SubCategoryId) ?>">
                                                                <img src="<?= UP.$dfc_menu_sub->Image ?>" style="width: 32px;height: 32px;">
                                                                <?= $dfc_menu_sub->SubCategoryTitle ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>

                                                </ul>

                                                <?php
                                            }
                                            ?>

                                        </li>


                                    <?php endforeach; ?>
                                </ul>
                            </li>



                            <li>
                                <a href="<?= base_url('Contact-Us') ?>" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>

                            </li>

                        </ul>
                    </div><!-- /.navbar-collapse -->

                </nav>
            </div>
        </div>
    </header>