
<?php

    include_once('elements/header.php');
    require_once('data/projects.php');


    // ======================================================
    // Get Project Slug
    // ======================================================

    $slug = $_GET['slug'] ?? '';


    // ======================================================
    // Validate Project
    // ======================================================

    if (!isset($projects[$slug])) {

        http_response_code(404);

        echo '<div class="container section-padding text-center">';
        echo '<h2>Project Not Found</h2>';
        echo '<p>The project you are looking for does not exist.</p>';
        echo '<a href="project.php" class="theme-btn">Back to Projects</a>';
        echo '</div>';

        include_once('elements/footer-pages.php');

        exit;
    }


    // ======================================================
    // Current Project
    // ======================================================

    $project = $projects[$slug];

?>

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">

        <div class="border-shape">
            <img src="assets/img/element.png" alt="shape-img">
        </div>

        <div class="line-shape">
            <img src="assets/img/line-element.png" alt="shape-img">
        </div>

        <div class="container">

            <div class="page-heading">

                <h1 class="wow fadeInUp" data-wow-delay=".3s">
                    <?= htmlspecialchars($project['title']) ?>
                </h1>

                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">

                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li><i class="fas fa-chevron-right"></i></li>

                    <li>
                        <a href="projects.php">Projects</a>
                    </li>

                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>

                    <li><?= htmlspecialchars($project['title']) ?></li>

                </ul>

            </div>

        </div>

    </div>

    <!-- Project Details Section -->
    <section class="Project-details-section fix section-padding">

        <div class="container">

            <div class="project-details-wrapper">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="project-details-items">

                            <!-- =====================================
                                Main Project Image
                            ====================================== -->
                            <div class="details-image">
                                <img src="<?= htmlspecialchars($project['main_image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>">
                            </div>

                            <!-- =====================================
                                Project Overview + Information
                            ====================================== -->
                            <div class="row g-4 justify-content-between">

                                <!-- Content -->
                                <div class="col-lg-7">

                                    <div class="details-content pt-5">

                                        <h3><?= htmlspecialchars($project['title']) ?></h3>
                                        <p><?= htmlspecialchars($project['overview']) ?></p>

                                    </div>

                                </div>

                                <!-- Project Information -->
                                <div class="col-lg-4">

                                    <div class="project-catagory">

                                        <h3>Project Info:</h3>

                                        <ul>

                                            <li>
                                                Client:
                                                <span>
                                                    <?= htmlspecialchars($project['client']) ?>
                                                </span>
                                            </li>


                                            <li>

                                                Category:
                                                <span>
                                                    <?= htmlspecialchars($project['category']) ?>
                                                </span>

                                            </li>

                                            <li>

                                                Location:
                                                <span>
                                                    <?= htmlspecialchars($project['location']) ?>
                                                </span>

                                            </li>

                                            <li>

                                                Share:
                                                <span>

                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>" target="_blank" rel="noopener noreferrer">
                                                        <i class="fa-brands fa-facebook-f me-3"></i>
                                                    </a>

                                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>" target="_blank" rel="noopener noreferrer">
                                                        <i class="fa-brands fa-linkedin-in"></i>
                                                    </a>

                                                </span>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>


                            <!-- =====================================
                                Challenge
                            ====================================== -->
                            <div class="details-content pt-3">
                                <h3>Our Challenge</h3>
                                <p><?= htmlspecialchars($project['challenge']) ?></p>
                            </div>

                            <!-- =====================================
                                Features
                            ====================================== -->
                            <div class="row g-4 pt-5">
                                <?php
                                    foreach ($project['features'] as $feature):
                                ?>
                                    <div class="col-lg-4 col-md-6">
                                        <ul class="list">
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                <?= htmlspecialchars($feature) ?>
                                            </li>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- =====================================
                                Technologies
                            ====================================== -->
                            <?php if (!empty($project['technologies'])): ?>

                                <div class="details-content pt-5">
                                    <h3>Technologies & Solutions</h3>
                                    <p> We use modern technologies and proven development practices to deliver reliable, scalable and secure solutions.</p>
                                </div>

                                <div class="row g-4 pt-4">
                                    <?php foreach ($project['technologies'] as $technology): ?>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <ul class="list">
                                                <li>
                                                    <i class="fa-regular fa-circle-check"></i>
                                                    <?= htmlspecialchars($technology) ?>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            <?php endif; ?>

                            <!-- =====================================
                                Project Result
                            ====================================== -->
                            <div class="details-content pt-5">

                                <h3>
                                    The Result of Project
                                </h3>

                                <p>
                                    <?= htmlspecialchars($project['result']) ?>
                                </p>

                            </div>

                            <!-- =====================================
                                Project Images
                            ====================================== -->

                            <?php if (!empty($project['detail_images'])): ?>

                                <div class="row g-4 pt-5">
                                    <?php foreach ($project['detail_images'] as $image): ?>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="thumb">
                                                <img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($project['title']) ?>" loading="lazy">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            <?php endif; ?>

                            <!-- =====================================
                                Back To Projects
                            ====================================== -->
                            <div class="text-center pt-5">

                                <a href="project.php" class="theme-btn">
                                    <i class="fa-regular fa-arrow-left-long"></i>
                                    Back to Projects
                                </a>

                            </div>


                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>


<?php
    include_once('elements/footer-pages.php');
?> 