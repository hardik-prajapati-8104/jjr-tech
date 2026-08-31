<?php
include_once('elements/header.php');
require_once 'data/services.php';
?>

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover"
    style="background-image: url('assets/img/breadcrumb.jpg');">

    <div class="border-shape">
        <img src="assets/img/element.png" alt="shape-img">
    </div>

    <div class="line-shape">
        <img src="assets/img/line-element.png" alt="shape-img">
    </div>

    <div class="container">
        <div class="page-heading">

            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                Our Services
            </h1>

            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li>Our Services</li>
            </ul>

        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->


<!-- Service Section Start -->
<section class="service-section fix section-padding">

    <div class="container">

        <!-- Section Title -->
        <div class="section-title title-area mx-auto mb-20">

            <div class="subtitle d-flex justify-content-center">

                <img src="assets/img/icon/arrowLeft.svg" alt="icon">

                <span>OUR SERVICES</span>

                <img src="assets/img/icon/arrowRight.svg" alt="icon">

            </div>

            <h2 class="title text-center">
                We Provide the Best Quality
            </h2>

        </div>


        <!-- Services -->
        <div class="service-wrapper mb-0">

            <div class="row">

                <?php
                $delays = ['.3s', '.5s', '.7s', '.9s'];

                $index = 0;

                foreach ($services as $slug => $service):

                    $delay = $delays[$index % count($delays)];

                    $index++;
                ?>

                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
                        data-wow-delay="<?= htmlspecialchars($delay) ?>">

                        <div class="service-box-items box-shadow">

                            <!-- Icon -->
                            <div class="icon">

                                <img src="assets/img/icon/<?= htmlspecialchars($service['icon']) ?>" alt="<?= htmlspecialchars($service['title']) ?>">

                            </div>


                            <!-- Content -->
                            <div class="content">

                                <h4>

                                    <a href="service-details.php?slug=<?= urlencode($slug) ?>">

                                        <?= htmlspecialchars($service['title']) ?>

                                    </a>

                                </h4>


                                <p>

                                    <?= htmlspecialchars($service['short_description']) ?>

                                </p>


                                <a
                                    href="service-details.php?slug=<?= urlencode($slug) ?>"
                                    class="theme-btn-2 mt-3">

                                    Read More

                                    <i class="fa-solid fa-arrow-right-long"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>
<!-- Service Section End -->


<!--<< Faq Section Start >>-->
<section class="faq-section style-2 fix section-padding">
    <div class="right-shape">
        <img src="assets/img/faq/right-shape.png" alt="shape-img">
    </div>
    <div class="faq-shape-box">
        <div class="faq-shape">
            <img src="assets/img/faq/shape.png" alt="shape-img">
        </div>
    </div>
    <div class="container">
        <div class="faq-wrapper style2">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="faq-image">
                        <img src="assets/img/faq/faq.png" alt="faq-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content style2">
                        <div class="section-title mb-40 mxw-650">
                            <div class="subtitle"> <img src="assets/img/icon/arrowLeft.svg" alt="icon"> <span> See
                                    Our Faqs
                                </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                            <h2 class="title"> Keep Your Business Safe & <br> Ensure High Availability </h2>
                        </div>

                        <div class="faq-accordion mt-4 mt-md-0">
                            <div class="accordion" id="accordion">
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                            aria-controls="faq1">
                                            How long should a business plan be?
                                        </button>
                                    </h5>
                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            There are many variations of passages Lorem Ipsum but the majority have
                                            suffered alteration in some form, by injected humor.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                            What is included in your services?
                                        </button>
                                    </h5>
                                    <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            There are many variations of passages Lorem Ipsum but the majority have
                                            suffered alteration in some form, by injected humor.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                            aria-controls="faq3">
                                            What type of company is measured?
                                        </button>
                                    </h5>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            There are many variations of passages Lorem Ipsum but the majority have
                                            suffered alteration in some form, by injected humor.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section class="contact-section fix section-padding">
    <div class="container">
        <div class="contact-wrapper">
            <div class="arrow-shape">
                <img src="assets/img/arrow-shape.png" alt="shape-img">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/contact.png" alt="contact-img">
                        <div class="cricle-shape">
                            <img src="assets/img/circle-shape.png" alt="shape-img">
                        </div>
                        <div class="small-cricle-shape">
                            <img src="assets/img/choose/circle.png" alt="shape-img">
                        </div>
                        <div class="frame-shape">
                            <img src="assets/img/frame.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title mb-40 mxw-650">
                            <div class="subtitle"> <img src="assets/img/icon/arrowLeftWhite.svg" alt="icon"> <span
                                    class="text-white"> TALK TO US
                                </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"></div>
                            <h2 class="title text-white"> How May We Help You! </h2>
                        </div>

                        <form action="#" id="contact-form" method="POST" class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <span>Your name*</span>
                                        <input type="text" name="name" id="name" placeholder="Robot fox">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <span>Your Email*</span>
                                        <input type="text" name="email" id="email" placeholder="info@example.com">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <span>Message*</span>
                                        <textarea name="message" id="message"
                                            placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                    <button type="submit" class="theme-btn bg-white">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('elements/footer-pages.php')
?>