<?php

    include_once('elements/header.php');
    require_once('data/blogs.php');

    // ======================================================
    // Get Blog Slug
    // ======================================================

    $slug = $_GET['slug'] ?? '';

    // ======================================================
    // Validate Blog
    // ======================================================

    if (!$slug || !isset($blogs[$slug])) {
        http_response_code(404);
        ?>
            <section class="section-padding text-center">

                <div class="container">

                    <h2>Blog Not Found</h2>

                    <p>
                        The blog article you are looking for does not exist.
                    </p>

                    <a href="news.php" class="theme-btn mt-3">
                        Back to Blog
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>

                </div>

            </section>
        <?php
            include_once('elements/footer-pages.php');
        exit;
    }

    // ======================================================
    // Current Blog
    // ======================================================

    $blog = $blogs[$slug];

    // ======================================================
    // Format Date
    // ======================================================

    $date = DateTime::createFromFormat('Y-m-d', $blog['date']);
    $formattedDate = $date ? $date->format('d M, Y') : $blog['date'];

    // ======================================================
    // Related / Recent Blogs
    // ======================================================

    $recentBlogs = [];
    foreach ($blogs as $recentSlug => $recentBlog) {
        if ($recentSlug === $slug) {
            continue;
        }
        $recentBlogs[$recentSlug] = $recentBlog;
    }
    $recentBlogs = array_slice( $recentBlogs, 0, 3, true );

    // ======================================================
    // Categories
    // ======================================================
    $categories = [];
    foreach ($blogs as $item) {
        $category = $item['category'];
        if (!isset($categories[$category])) {
            $categories[$category] = 0;
        }
        $categories[$category]++;
    }

?>

<!-- =====================================================
     Breadcrumb
===================================================== -->

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">

    <div class="border-shape">
        <img src="assets/img/element.png" alt="shape-img">
    </div>

    <div class="line-shape">
        <img src="assets/img/line-element.png" alt="shape-img">
    </div>


    <div class="container">

        <div class="page-heading">

            <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog Details</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.php">Home</a>
                </li>

                <li><i class="fas fa-chevron-right"></i></li>
                <li>
                    Blog Details
                </li>

            </ul>

        </div>

    </div>

</div>

<!-- =====================================================
     News Standard Section
===================================================== -->
<section class="news-standard fix section-padding">

    <div class="container">
        <div class="news-details-area">
            <div class="row g-5">
                <!--=================================================
                     Main Content
                ================================================== -->
                <div class="col-12 col-lg-8">
                    <div class="blog-post-details">

                        <div class="single-blog-post">
                            <!-- Featured Image -->
                            <div class="post-featured-thumb bg-cover" style="background-image: url('<?= htmlspecialchars($blog['image']) ?>');"></div>
                            <div class="post-content">
                                <!-- ==================================
                                     Blog Meta
                                =================================== -->
                                <ul class="post-list d-flex align-items-center">
                                    <li><i class="fa-regular fa-user"></i>By<?= htmlspecialchars($blog['author']) ?></li>
                                    <li><i class="fa-solid fa-calendar-days"></i>
                                        <?= htmlspecialchars($formattedDate) ?>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-tag"></i>
                                        <?= htmlspecialchars($blog['category']) ?>
                                    </li>
                                </ul>
                                <!-- ==================================
                                     Blog Title
                                =================================== -->
                                <h3>
                                    <?= htmlspecialchars($blog['title']) ?>
                                </h3>

                                <!-- ==================================
                                     Intro Content
                                =================================== -->
                                <?php if (!empty($blog['intro'])): ?>
                                    <?php foreach ($blog['intro'] as $paragraph): ?>
                                        <p class="mb-3">
                                            <?= htmlspecialchars($paragraph) ?>
                                        </p>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <!-- ==================================
                                     Highlight
                                =================================== -->
                                <?php if (!empty($blog['highlight'])): ?>
                                    <div class="hilight-text mt-4 mb-4">
                                        <p><?= htmlspecialchars($blog['highlight']) ?></p>
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 20.3698H7.71428L2.57139 30.5546H10.2857L15.4286 20.3698V5.09247H0V20.3698Z" fill="#3C72FC" />
                                            <path d="M20.5703 5.09247V20.3698H28.2846L23.1417 30.5546H30.856L35.9989 20.3698V5.09247H20.5703Z" fill="#3C72FC" />
                                        </svg>
                                    </div>
                                <?php endif; ?>
                                <!-- ==================================
                                     Challenge
                                =================================== -->
                                <?php if (!empty($blog['challenge'])): ?>
                                    <div class="details-content pt-3">
                                        <h3>Our Challenge</h3>
                                        <p><?= htmlspecialchars($blog['challenge']) ?></p>
                                    </div>
                                <?php endif; ?>

                                <!-- ==================================
                                     Features
                                =================================== -->
                                <?php if (!empty($blog['features'])): ?>
                                    <div class="row g-4 pt-5">
                                        <?php
                                            $featureChunks = array_chunk( $blog['features'],2);
                                            foreach ($featureChunks as $features):
                                        ?>
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="list">
                                                    <?php foreach ($features as $feature): ?>
                                                        <li>
                                                            <i class="fa-regular fa-circle-check"></i>
                                                            <?= htmlspecialchars($feature) ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>
                                <?php endif; ?>

                                <!-- ==================================
                                     Result
                                =================================== -->
                                <?php if (!empty($blog['result'])): ?>
                                    <div class="details-content pt-5">
                                        <h3>The Result of Project</h3>
                                        <p><?= htmlspecialchars($blog['result']) ?></p>
                                    </div>
                                <?php endif; ?>

                                <!-- ==================================
                                     Detail Images
                                =================================== -->

                                <?php if (!empty($blog['detail_images'])): ?>

                                    <div class="row g-4 pt-5">

                                        <?php foreach ($blog['detail_images']as $detailImage): ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="details-image">
                                                    <img src="<?= htmlspecialchars($detailImage) ?>" alt="<?= htmlspecialchars($blog['title']) ?>" loading="lazy">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>

                                <?php endif; ?>

                            </div>
                        </div>

                        <!-- =========================================
                             Tags & Social Share
                        ========================================== -->

                        <div class="row tag-share-wrap mt-4 mb-5">

                            <div class="col-lg-8 col-12">
                                <?php if (!empty($blog['tags'])): ?>
                                    <div class="tagcloud">
                                        <?php foreach ($blog['tags'] as $tag): ?>
                                            <a href="news.php">
                                                <?= htmlspecialchars($tag) ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">

                                <div class="social-share">

                                    <span class="me-3">Share:</span>
                                    <a href="javascript:void();">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a href="javascript:void();">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a href="javascript:void();">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                        <!-- =========================================
                             Comments
                        ========================================== -->
                        <div class="comments-area">

                            <div class="comments-heading">
                                <h3>0 Comments</h3>
                            </div>
                            <div class="comment-form-wrap pt-5">

                                <h3>Leave a comment</h3>
                                <form action="#" id="contact-form" method="POST">

                                    <div class="row g-4">

                                        <div class="col-lg-6">

                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-clt">
                                                <input type="email" name="email" id="email2" placeholder="Your Email" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-12">

                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Write Message" required></textarea>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                            <button type="submit" class="theme-btn">
                                                Post Comment
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                            </button>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     Sidebar
                ================================================== -->

                <div class="col-12 col-lg-4">

                    <div class="main-sidebar">

                        <!-- ==========================================
                             Search
                        =========================================== -->

                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Search</h3>
                            </div>

                            <div class="search-widget">
                                <form action="news.php" method="GET">
                                    <input type="text" name="search" placeholder="Search here">
                                    <button type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>

                            </div>

                        </div>

                        <!-- ==========================================
                             Categories
                        =========================================== -->
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>

                            <div class="news-widget-categories">

                                <ul>
                                    <?php foreach ( $categories as $categoryName => $categoryCount): ?>
                                        <li class="<?= ($categoryName === $blog['category'])? 'active': ''?>">
                                            <a href="news.php?category=<?= urlencode($categoryName) ?>">
                                                <?= htmlspecialchars($categoryName) ?>
                                                <span>
                                                    (<?= $categoryCount ?>)
                                                </span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>
                        </div>


                        <!-- ==========================================
                             Recent Posts
                        =========================================== -->

                        <div class="single-sidebar-widget">

                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>


                            <div class="recent-post-area">

                                <?php foreach ($recentBlogs as $recentSlug => $recentBlog): ?>

                                    <?php
                                        $recentDate = DateTime::createFromFormat('Y-m-d', $recentBlog['date']);
                                        $recentFormattedDate = $recentDate ? $recentDate->format('d M, Y'): $recentBlog['date'];
                                    ?>

                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="<?= htmlspecialchars($recentBlog['image']) ?>" alt="<?= htmlspecialchars($recentBlog['title']) ?>" loading="lazy">
                                        </div>

                                        <div class="recent-content">

                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <?= htmlspecialchars($recentFormattedDate) ?>
                                                </li>
                                            </ul>

                                            <h6>

                                            <a href="news-details.php?slug=<?= urlencode($recentSlug) ?>">
                                                <?= htmlspecialchars($recentBlog['title']) ?>
                                            </a>

                                            </h6>

                                        </div>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        </div>


                        <!-- ==========================================
                             Tags
                        =========================================== -->

                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Tags</h3>
                            </div>

                            <div class="news-widget-categories">

                                <div class="tagcloud">

                                    <?php

                                        $allTags = [];

                                        foreach ($blogs as $item) {
                                            if (!empty($item['tags'])) {
                                                foreach ($item['tags'] as $tag) {
                                                    $allTags[$tag] = true;
                                                }
                                            }
                                        }
                                        foreach ( array_keys($allTags) as $tag):

                                    ?>

                                    <a href="news.php">
                                        <?= htmlspecialchars($tag) ?>
                                    </a>

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


<?php

include_once('elements/footer-pages.php');

?>