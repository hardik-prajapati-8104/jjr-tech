 <?php

    include_once('elements/header.php');

    require_once('data/projects.php');

    ?>

 <!--<< Breadcrumb Section Start >>-->

 <div
     class="breadcrumb-wrapper bg-cover"
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
                 Projects
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
                     Projects
                 </li>

             </ul>

         </div>

     </div>

 </div>


 <!-- Project Section Start -->

 <section class="project-section section-padding fix">

     <div class="container">

         <div class="row g-4">

             <?php

                $projectIndex = 0;

                foreach ($projects as $slug => $project):

                    $delays = [
                        '.3s',
                        '.5s',
                        '.7s'
                    ];

                    $delay =
                        $delays[$projectIndex % count($delays)];

                    $projectIndex++;

                ?>

                 <!-- Project Item -->

                 <div
                     class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
                     data-wow-delay="<?= htmlspecialchars($delay) ?>">

                     <div class="project-items">

                         <div class="project-image">

                             <!-- Project Image -->

                             <img
                                 src="<?= htmlspecialchars($project['main_image']) ?>"
                                 alt="<?= htmlspecialchars($project['title']) ?>"
                                 loading="lazy">


                             <!-- Project Content -->

                             <div class="project-content style2">

                                 <p>
                                     <?= htmlspecialchars($project['category']) ?>
                                 </p>


                                 <h4>

                                     <a
                                         href="project-details.php?slug=<?= urlencode($slug) ?>">

                                         <?= htmlspecialchars($project['title']) ?>

                                     </a>

                                 </h4>

                             </div>

                         </div>

                     </div>

                 </div>

             <?php endforeach; ?>

         </div>

     </div>

 </section>


 <?php

    include_once('elements/footer-pages.php');

    ?>