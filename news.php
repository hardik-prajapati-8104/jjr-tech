<?php
    include_once('elements/header.php');
    require_once('data/blogs.php');

    // ====================================================== 
    // Pagination Settings 
    // ====================================================== 
    $perPage = 6; // Current page
    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    // Never allow page less than 1 
    $currentPage = max(1, $currentPage);
    // Total blogs 
    $totalBlogs = count($blogs);
    // Total pages 
    $totalPages = max(1, (int) ceil($totalBlogs / $perPage));
    // If page is greater than available pages 
    if ($currentPage > $totalPages) {
        $currentPage = $totalPages;
    }
    // Calculate starting position 
    $offset = ($currentPage - 1) * $perPage;
    // Get blogs for current page 
    $paginatedBlogs = array_slice($blogs, $offset, $perPage, true);
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
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog Grid</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li>
                    Blog Grid
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- News Section Start -->
<section class="news-section-4 fix section-padding">

    <div class="container">

        <div class="row g-4">

            <?php
            $blogIndex = 0;
            foreach ($paginatedBlogs as $slug => $blog):

                $delays = ['.3s','.5s','.7s'];
                $delay = $delays[$blogIndex % count($delays)];
                $blogIndex++;

                // ==========================================
                // Format Date
                // ==========================================
                $date = DateTime::createFromFormat( 'Y-m-d', $blog['date']);
                $day = $date ? $date->format('d') : '';
                $month = $date ? $date->format('M'): '';

            ?>

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?= htmlspecialchars($delay) ?>">

                    <div class="news-card-items style-2 mt-0 pb-0">

                        <!-- ==================================
                             Blog Image
                        =================================== -->
                        <div class="news-image">

                            <img src="<?= htmlspecialchars($blog['image']) ?>" alt="<?= htmlspecialchars($blog['title']) ?>" loading="lazy">

                            <!-- Date -->
                            <div class="post-date">
                                <h3><?= htmlspecialchars($day) ?>
                                    <br>
                                    <span><?= htmlspecialchars($month) ?></span>
                                </h3>
                            </div>

                        </div>

                        <!-- ==================================
                             Blog Content
                        =================================== -->
                        <div class="news-content">

                            <ul>
                                <!-- Author -->
                                <li>
                                    <i class="fa-regular fa-user"></i>By<?= htmlspecialchars($blog['author']) ?>
                                </li>

                                <!-- Category -->
                                <li>
                                    <i class="fa-solid fa-tag"></i>
                                    <?= htmlspecialchars($blog['category']) ?>
                                </li>

                            </ul>

                            <!-- Title -->
                            <h3>

                                <a href="news-details.php?slug=<?= urlencode($slug) ?>">
                                    <?= htmlspecialchars($blog['title']) ?>
                                </a>

                            </h3>

                            <!-- Read More -->
                            <a href="news-details.php?slug=<?= urlencode($slug) ?>" class="theme-btn-2 mt-3">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>
            <?php if (empty($paginatedBlogs)): ?>
                <div class="col-12">
                    <div class="text-center py-5">
                        <h3>
                            No blog posts found.
                        </h3>
                    </div>
                </div>
            <?php endif; ?>

        </div>

        <!-- ==============================================
             Pagination
        =============================================== -->
        <?php if ($totalPages > 1): ?>

            <div class="page-nav-wrap pt-5 text-center wow fadeInUp" data-wow-delay=".3s">
                <ul>
                    <!-- Previous -->
                    <?php if ($currentPage > 1): ?>
                        <li>
                            <a class="page-numbers" href="?page=<?= $currentPage - 1 ?>" aria-label="Previous page">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </a>
                        </li>

                    <?php endif; ?>

                    <!-- Page Numbers -->
                    <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                        <li>
                            <a class="page-numbers <?= ($page === $currentPage) ? 'active' : '' ?>" href="?page=<?= $page ?>">
                                <?= str_pad( $page, 2, '0', STR_PAD_LEFT ) ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <!-- Next -->
                    <?php if ($currentPage < $totalPages): ?>
                        <li>
                            <a class="page-numbers" href="?page=<?= $currentPage + 1 ?>" aria-label="Next page">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>

            </div>

        <?php endif; ?>

    </div>

</section>


<?php
    include_once('elements/footer-pages.php')
?>