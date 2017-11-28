<?php include ('inc/header-top.php');?>
<?php include ('inc/header.php');?>

<!-- Home Design Inner Pages -->
<div class="ulockd-inner-home">
    <div class="container text-center">
        <div class="row">
            <div class="inner-conraimer-details">
                <div class="col-md-12">
                    <h1 class="text-uppercase">CONTACT US</h1>
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
                        <li> <a href="javascript::"> CONTACT US </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inner Pages Main Section -->
<section class="ulockd-contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <div class="ulockd-cp-title">
                    <h2 class="text-uppercase">CONTACT DETAILS</h2>
                    <?=@$message;  ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="contact-details one">
                        <ul class="contact-place one">
                            <li><span class="flaticon-black-back-closed-envelope-shape" title="Bclinico@email.com"> <small>Bclinico@email.com </small></span></li>
                            <li><span class="flaticon-old-handphone" title="99 55 66 88 526"> <small> +99 55 66 88 526 </small></span></li>
                            <li><span class="flaticon-map-marker" title="Victoria 8007 Australia Envato HQ 121 King Street, Melbourne"> <small>Victoria 8007 Australia Envato  </small></span></li>
                            <li><span class="flaticon-checkbox-pen-outline" title="Written Your Message"> <small>Left Some Word </small></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="ulockd-contact-form">
                    <form id="contact_form" name="contact_form" class="contact-form" action="" method="post" novalidate="novalidate">
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input id="form_name" name="form_name" class="form-control ulockd-form-fg required" placeholder="Your name" required="required" data-error="Name is required." type="text" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input id="form_email" name="form_email" class="form-control ulockd-form-fg required email" placeholder="Your email" required="required" data-error="Email is required." type="email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input id="form_phone" name="form_phone" class="form-control ulockd-form-fg required" placeholder="Phone" required="required" data-error="Phone Number is required." type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input id="form_subject" name="form_subject" class="form-control ulockd-form-fg required" placeholder="Subject"  data-error="Subject is required." type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="form_message" class="form-control ulockd-form-tb required" rows="12" placeholder="Your massage" required="required" data-error="Message is required."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group ulockd-contact-btn">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
                                    <button type="submit" class="btn btn-default ulockd-btn-thm2" data-loading-text="Getting Few Sec...">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ulockd-padz">
        <div class="row">
            <div class="col-md-12">
                <div class="ulockd-google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.185495048286!2d79.89790451416167!3d6.747217172395479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae245ebc9ede661%3A0x94e3033153f0146!2sRiz+Creations!5e0!3m2!1sen!2slk!4v1510329356687" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include ('inc/footer-top.php');?>
<?php include ('inc/footer.php');?>