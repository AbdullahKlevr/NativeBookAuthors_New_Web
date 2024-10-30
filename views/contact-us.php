
<!DOCTYPE html>
<html lang="en-US">

<head>
<?php  include_once('../includes/head.php')  ?>
</head>

<body>

    <main>

    <?php include_once('../includes/header.php') ?>     

<section class="hero-banner">
            <div class="container">
                <div class="justify-content-between row">
                    <div class="col-12 col-xl-6 col-md-12 d-flex align-items-center align-content-center">
                        <div class="flex-wrap align-items-center">
                            <h1 class="animate__animated animate__fadeInUp"> <span style="font-weight: 800;">Contact
                                    Us</span></h1>
                            <p class="animate__animated animate__fadeInUp">Want to know more? Scroll down and learn more
                                about us! Who we are and what do we do.</p>
                            <div class="banner-btns btn-darks mt-2 animate__animated animate__fadeInUp">
                                <a class="bg-dark-btn btn btn-dark-new" href="tel:(323) 591-4113"> Call Now</a>
                                <a class="button-28 open_popup" role="button"> Get Free Consultation </a>
                            </div>
                            <!-- <div class="trust-icons mt-4 animate__animated animate__fadeInUp">
                                <ul class="trust-wigdetul">
                                    <li>
                                        <a href="https://www.trustpilot.com/review/authorpublications.com" target="_blank"><img src="images/orm-1.png"></a>
                                        <a href="https://www.sitejabber.com/reviews/authorpublications.com" target="_blank"><img src="images/orm-2.png"></a>
                                        <a href="https://www.reviews.io/company-reviews/store/www.authorpublications.com" target="_blank"><img src="images/orm-3.png"></a>
                                        <a href="https://www.bark.com/en/us/company/author-publications/EBLAM/" target="_blank"><img src="images/orm-4.png" class="barkk"></a>
                                    </li>
                                </ul>
                            </div> -->

                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-md-12">
                        <form class="form_submission" style="padding: 5px;" method="POST" action="/leads">
                            <div class="hero-banner-form">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-3">
                                        <img src="images/my-images/off.png"
                                            class="percentfifty animatepulse animate__animated animate__jackInTheBox"
                                            style="width : auto; margin-top: -20px; margin-left: 0px;"
                                            alt="50% Off - Native Book Authors">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="">Fill Out This Brief Form To Get Your</p>
                                        <h5 class="banner-form-heading">Discount Reserved</h5>
                                    </div>
                                </div>

                                <div class="mb-4"><input class="form-control" name="name" placeholder="Full Name"
                                        required></div>
                                <div class="mb-4"><input type="email" class="form-control" name="email"
                                        placeholder="Email" required></div>
                                <div class="mb-4"><input type="tel" name="phone" class="form-control" minlength="10"
                                        maxlength="12" placeholder="Phone" required></div>
                                <div class="mb-4"><textarea class="form-control" rows="5" name="brief"
                                        placeholder="Talk About Your Project"></textarea></div>
                                <button type="submit" class="banner-form-new-btn btn">Lets Talk To An Expert!</button>
                                <div class="form-group msgText">
                                    <input type="checkbox" id="msg" name="msg" value="Bike">
                                    <label for="msg" style="color:#000"> By providing a telephone number and submitting
                                        this form you are consenting to be contacted by SMS text message. Message & data
                                        rates may apply. You can reply STOP to opt-out of further messaging. </label>
                                </div>
                                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                <div class="success mt-3 alert alert-success text-left mb-0" style="display: none">
                                </div>
                                <div class="loader" style="display: none">
                                    <img alt="loader" src="loader.gif">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-us">
            <div class="container">
                <div class="contact-us-heading">
                    <p class="line-before-after">Get to know more about our services!</p>
                    <h5>GET IN TOUCH, CONNECT WITH US!</h5>
                    <p class="text-dark">Our support agents will assist you and address all your queries!</p>
                </div>
                <div class="ways-to-connect">
                    <div class="ways-to-connect-connect"><i class="fa-phone fa-solid"></i>
                        <div class="ways-to-connect-para">
                            <p>Call Us Now</p><a href="tel:(323) 591-4113">(323) 591-4113</a>
                            <a href="tel:3235914113">(323) 591-4113</a>
                        </div>
                    </div>
                    <div class="ways-to-connect-connect"><i class="fa-envelope far"></i>
                        <div class="ways-to-connect-para">
                            <p>Mail Us</p><a href="mailto:info@nativebookauthors.com">info@nativebookauthors.com</a>
                        </div>
                    </div>
                    <div class="ways-to-connect-connect"><i class="fa-location-dot fa-solid"></i>
                        <div class="ways-to-connect-para">
                            <p>Address</p>
                            <p>224 W 35th St Ste 500 PMB 33 New York, NY 10001</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="my-contact-us">
            <div class="container py-5">
                <div class="row">
                    <div class="align-items-center pt-4 row">
                        <div class="col-12 col-md-6"></div>
                        <div class="col-12 col-md-6">
                            <div>
                                <div class="sec-heading-new text-white footer-form-head">Let’s Get Started!</div>
                                <p style="color : #000">Schedule an appointment with our book writers and start
                                    writing your
                                    first draft.</p>
                                <form class="form_submission" method="POST" action="/leads">
                                    <div class="mb-4"><input class="form-control footer-form" name="name"
                                            placeholder="Full Name" required></div>
                                    <div class="mb-4"><input type="email" class="form-control footer-form" name="email"
                                            placeholder="Email" required></div>
                                    <div class="mb-4"><input type="tel" name="phone" class="form-control footer-form"
                                            minlength="10" maxlength="12" placeholder="Phone" required></div>
                                    <div class="mb-4"><textarea class="form-control footer-form" rows="5" name="brief"
                                            placeholder="Talk About Your Project"></textarea></div>
                                    <button type="submit" class="banner-form-new-btn btn">Submit</button>
                                    <div class="form-group msgText">
                                        <input type="checkbox" id="msg" name="msg" value="Bike">
                                        <label for="msg" style="color:#000"> By providing a telephone number and
                                            submitting this form you are consenting to be contacted by SMS text message.
                                            Message & data rates may apply. You can reply STOP to opt-out of further
                                            messaging. </label>
                                    </div>
                                    <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none">
                                    </div>
                                    <div class="success mt-3 alert alert-success text-left mb-0" style="display: none">
                                    </div>
                                    <div class="loader" style="display: none">
                                        <img alt="loader" src="loader.gif">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <?php  include_once('../includes/footer.php') ?>

<?php  include_once('../includes/popupform.php') ?>

<style>
    .modal-backdrop.show {
        opacity: .7;
    }
</style>


<?php include_once('../includes/foot.php') ?>

</body>

</html>