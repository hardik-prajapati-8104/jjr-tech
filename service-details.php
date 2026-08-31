<?php

include_once 'elements/header.php';

require_once 'data/services.php';


// --------------------------------------------------
// Get Service Slug
// --------------------------------------------------

$slug = $_GET['slug'] ?? '';

$slug = trim($slug);


// --------------------------------------------------
// Validate Service
// --------------------------------------------------

if ($slug === '' || !isset($services[$slug])) {

    http_response_code(404);

    echo '<div class="container section-padding text-center">';
    echo '<h2>Service Not Found</h2>';
    echo '<p>The service you are looking for does not exist.</p>';
    echo '<a href="service.php" class="theme-btn mt-3">Back to Services</a>';
    echo '</div>';

    include_once 'elements/footer-pages.php';

    exit;
}


// --------------------------------------------------
// Current Service
// --------------------------------------------------

$service = $services[$slug];

?>

<!-- Breadcrumb Section Start -->

<div class="breadcrumb-wrapper bg-cover"
    style="background-image: url('assets/img/breadcrumb.jpg');">

    <div class="border-shape">

        <img
            src="assets/img/element.png"
            alt="shape-img">

    </div>

    <div class="line-shape">

        <img
            src="assets/img/line-element.png"
            alt="shape-img">

    </div>


    <div class="container">

        <div class="page-heading">

            <h1
                class="wow fadeInUp"
                data-wow-delay=".3s">
                <?= htmlspecialchars($service['title']) ?>
            </h1>


            <ul
                class="breadcrumb-items wow fadeInUp"
                data-wow-delay=".5s">

                <li>

                    <a href="index.php">
                        Home
                    </a>

                </li>


                <li>

                    <i class="fas fa-chevron-right"></i>

                </li>


                <li>

                    <a href="services.php">
                        Services
                    </a>

                </li>


                <li>

                    <i class="fas fa-chevron-right"></i>

                </li>


                <li>

                    <?= htmlspecialchars($service['title']) ?>

                </li>

            </ul>

        </div>

    </div>

</div>

<!-- Breadcrumb Section End -->



<!-- Service Details Section Start -->

<section class="service-details-section fix section-padding">

    <div class="container">

        <div class="service-details-wrapper">

            <div class="row g-4">


                <!-- =====================================
                     SIDEBAR
                ====================================== -->

                <div class="col-12 col-lg-4 order-2 order-md-1">

                    <div class="main-sidebar">


                        <!-- All Services -->

                        <div class="single-sidebar-widget">

                            <div class="wid-title">

                                <h3>
                                    All Services
                                </h3>

                            </div>


                            <div class="widget-categories">

                                <ul>

                                    <?php foreach ($services as $serviceSlug => $serviceItem): ?>

                                        <li
                                            class="<?= $serviceSlug === $slug ? 'active' : '' ?>">

                                            <a
                                                href="service-detail.php?slug=<?= urlencode($serviceSlug) ?>">

                                                <?= htmlspecialchars($serviceItem['title']) ?>

                                                <i class="fa-solid fa-arrow-right-long"></i>

                                            </a>

                                        </li>

                                    <?php endforeach; ?>

                                </ul>

                            </div>

                        </div>



                        <!-- Opening Hours -->

                        <div class="single-sidebar-widget">

                            <div class="wid-title">

                                <h3>
                                    Opening Hours
                                </h3>

                            </div>


                            <div class="opening-category">

                                <ul>

                                    <li>
                                        <i class="fa-regular fa-clock"></i>
                                        Mon - Sat: 10.00 AM - 4.00 PM
                                    </li>

                                    <li>
                                        <i class="fa-regular fa-clock"></i>
                                        Sun: 09.00 AM - 4.00 PM
                                    </li>

                                    <li>
                                        <i class="fa-regular fa-clock"></i>
                                        Friday: Closed
                                    </li>

                                    <li>
                                        <i class="fa-regular fa-clock"></i>
                                        Emergency: 24 hours
                                    </li>

                                </ul>

                            </div>

                        </div>



                        <!-- Contact -->

                        <div
                            class="single-sidebar-image bg-cover"
                            style="background-image: url('assets/img/service/post.jpg');">

                            <div class="contact-text">

                                <div class="icon">

                                    <i class="fa-solid fa-phone"></i>

                                </div>


                                <h4>
                                    Need Help? Call Here
                                </h4>


                                <h5>

                                    <a href="tel:+2085550112">
                                        +208-555-0112
                                    </a>

                                </h5>

                            </div>

                        </div>


                    </div>

                </div>



                <!-- =====================================
                     SERVICE CONTENT
                ====================================== -->

                <div class="col-12 col-lg-8 order-1 order-md-2">

                    <div class="service-details-items">


                        <!-- Main Image -->

                        <div class="details-image">

                            <img
                                src="assets/img/service/<?= htmlspecialchars($service['image']) ?>"
                                alt="<?= htmlspecialchars($service['title']) ?>">

                        </div>



                        <!-- Details Content -->

                        <div class="details-content">


                            <h3>

                                <?= htmlspecialchars($service['title']) ?>

                            </h3>



                            <!-- Description -->

                            <?php foreach ($service['description'] as $paragraph): ?>

                                <p class="mt-3">

                                    <?= htmlspecialchars($paragraph) ?>

                                </p>

                            <?php endforeach; ?>



                            <!-- Video + Benefits -->

                            <div class="details-video-items">


                                <!-- Video -->

                                <div class="video-thumb">

                                    <img
                                        src="assets/img/service/<?= htmlspecialchars($service['video_image']) ?>"
                                        alt="<?= htmlspecialchars($service['title']) ?>">


                                    <div class="video-box">

                                        <a
                                            href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                            class="video-btn ripple popup-video">

                                            <i class="fa-solid fa-play"></i>

                                        </a>

                                    </div>

                                </div>



                                <!-- Benefits -->

                                <div class="content">

                                    <h4>

                                        <?= htmlspecialchars($service['benefits_title']) ?>

                                    </h4>


                                    <p>

                                        <?= htmlspecialchars($service['benefits_description']) ?>

                                    </p>


                                    <ul class="list">

                                        <?php foreach ($service['benefits'] as $benefit): ?>

                                            <li>

                                                <i class="fa-regular fa-circle-check"></i>

                                                <?= htmlspecialchars($benefit) ?>

                                            </li>

                                        <?php endforeach; ?>

                                    </ul>

                                </div>

                            </div>



                            <!-- Bottom Description -->

                            <p class="mt-4">

                                <?= htmlspecialchars($service['bottom_description']) ?>

                            </p>



                            <!-- =====================================
                                 Additional Images
                            ====================================== -->

                            <?php if (!empty($service['images'])): ?>

                                <div class="image-area">

                                    <div class="row g-4">

                                        <?php foreach ($service['images'] as $image): ?>

                                            <div class="col-lg-6 col-md-6">

                                                <div class="thumb">

                                                    <img
                                                        src="assets/img/service/<?= htmlspecialchars($image) ?>"
                                                        alt="<?= htmlspecialchars($service['title']) ?>">

                                                </div>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            <?php endif; ?>



                            <!-- FAQ Heading -->

                            <h3 class="mt-5">

                                Most Comment Question?

                            </h3>


                        </div>



                        <!-- =====================================
                             FAQ
                        ====================================== -->

                        <div class="faq-content style-3">

                            <div class="faq-accordion">

                                <div
                                    class="accordion"
                                    id="serviceAccordion">

                                    <?php foreach ($service['faqs'] as $faqIndex => $faq): ?>

                                        <?php

                                        $faqId = 'faq' . ($faqIndex + 1);

                                        $isFirst = $faqIndex === 0;

                                        ?>

                                        <div
                                            class="accordion-item mb-3 wow fadeInUp"
                                            data-wow-delay="<?= htmlspecialchars(($faqIndex + 3) / 10) ?>s">

                                            <h5 class="accordion-header">

                                                <button
                                                    class="accordion-button <?= !$isFirst ? 'collapsed' : '' ?>"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#<?= $faqId ?>"
                                                    aria-expanded="<?= $isFirst ? 'true' : 'false' ?>"
                                                    aria-controls="<?= $faqId ?>">

                                                    <?= htmlspecialchars($faq['question']) ?>

                                                </button>

                                            </h5>


                                            <div
                                                id="<?= $faqId ?>"
                                                class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>"
                                                data-bs-parent="#serviceAccordion">

                                                <div class="accordion-body">

                                                    <?= htmlspecialchars($faq['answer']) ?>

                                                </div>

                                            </div>

                                        </div>

                                    <?php endforeach; ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Service Details Section End -->


<?php

include_once 'elements/footer-pages.php';

?>