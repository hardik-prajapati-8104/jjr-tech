
<?php
   include_once ('elements/header.php');
   require_once 'data/services.php';
   require_once 'data/projects.php';
   include_once 'data/blogs.php';
?>

   <style>
      .fancy-box.style2 .icon {
         width: 56px;
         height: 56px;
         display: flex;
         align-items: center;
         justify-content: center;
         background: #fff;
         border-radius: 10px;
      }

      .fancy-box.style2 .icon i {
         font-size: 30px;
         color: #17629a;
         line-height: 1;
      }

      .service-card .body p {
         display: -webkit-box;
         -webkit-box-orient: vertical;
         -webkit-line-clamp: 3; /* Limits the text to 3 lines */
         overflow: hidden;
         text-overflow: ellipsis;
      }
   </style> 

   <!-- Hero Section    S T A R T -->
   <section class="hero-section fix">
      <div class="hero-wrapper style1" height="100px;">
         <div class="shape1_2 d-none d-xxl-block"><img src="assets/img/shape/heroShape1_2.png" alt="shape"></div>
         <div class="shape1_4 movingX d-none d-xxl-block"><img src="assets/img/shape/heroShape1_4.png" alt="shape">
         </div>
         <div class="shape1_5  float-bob-y d-none d-xxl-block"><img src="assets/img/shape/heroShape1_5.png" alt="shape">
         </div>
         <div class="container">
            <div class="hero-main-container style1 border-radius">
               <div class="container">
                  <div class="row d-flex align-items-center align-items-xl-start">
                     <div class="col-xl-6 order-2 order-xl-1">
                        <div class="hero-content style1">
                           <h6 class="subtitle"> <img src="assets/img/icon/subtitleIcon1_1.svg" alt="icon">SMART TECHNOLOGY. STRONGER BUSINESS.</h6>
                           <h1>Powering Business Growth With Intelligent IT Solutions</h1>
                           <p class="text-white">JJR TECH delivers reliable, scalable, and secure technology solutions across IT infrastructure, network services, web development, databases, cloud, and digital platforms—helping businesses operate smarter, connect better, and grow with confidence.</p>

                           <div class="checklist-wrapper style3">
                              <ul class="checklist style3">
                                 <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon">IT Infrastructure & Network Solutions
                                 </li>
                                 <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Web & Software Development
                                 </li>
                              </ul>
                              <ul class="checklist style3">
                                 <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Cloud & Database Solutions</li>
                                 <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon">Digital Platforms & Technology Support</li>
                              </ul>
                           </div>
                           <div class="contact-meta">
                              <div class="btn-wrapper">
                                 <a href="contact.html" class="gt-btn style4">Get Started →<i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                              </div>

                              <div class="btn-wrapper">
                                 <a href="contact.html" class="gt-btn style1">Explore Services → <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 order-1 order-xl-2 justify-content-center">
                        <div class="hero-thumb style1">
                           <div class="main-thumb">
                              <img src="assets/img/hero/heroThumb1_1.png" alt="thumb">
                           </div>

                           <div class="shape1_1 d-none d-xxl-block"><img src="assets/img/shape/heroShape1_1.png"
                                 alt="shape"></div>
                        </div>
                     </div>
                  </div>
               </div>
 
            </div>
         </div>
      </div>
   </section>

   <!-- Brand Slider Section    S T A R T -->
   <div class="brand-slider-section fix">
      <div class="brand-slider-container-wrapper style1">
         <div class="container">
            <div class="row">
               <div class="slider-area brandSliderOne">
                  <div class="swiper gt-slider" id="brandSliderOne"
                     data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":3},"992":{"slidesPerView":4},"1200":{"slidesPerView":5}}}'>
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_1.svg" alt="brandLogo">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_2.svg" alt="brandLogo">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_3.svg" alt="brandLogo">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_4.svg" alt="brandLogo">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_5.svg" alt="brandLogo">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_1.svg" alt="brandLogo">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_2.svg" alt="brandLogo">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_3.svg" alt="brandLogo">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_4.svg" alt="brandLogo">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="brand-logo">
                              <img src="assets/img/brand-logo/brandLogo1_5.svg" alt="brandLogo">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Service Section    S T A R T -->
   <section class="service-section space fix">

      <div class="service-container-wrapper style1">

         <div class="container">

               <div class="title-wrap mb-45">

                  <div class="section-title">

                     <div class="subtitle">
                           <img src="assets/img/icon/arrowLeft.svg" alt="icon">
                           <span>Our Services</span>
                           <img src="assets/img/icon/arrowRight.svg" alt="icon">
                     </div>

                     <h2 class="title">
                           Driving Innovation Through Advanced Technology Solutions
                     </h2>

                     <p>
                           From robust infrastructure and secure networks to modern web
                           applications, cloud systems, and smart platforms, JJR TECH
                           delivers tailored IT solutions designed to accelerate growth,
                           enhance security, and optimize performance.
                     </p>

                  </div>

                  <!-- Slider Arrows -->
                  <div class="arrow-btn text-end wow fadeInUp" data-wow-delay=".9s">

                     <button data-slider-prev="#serviceSliderOne" class="slider-arrow style1" type="button" aria-label="Previous Services">
                           <i class="fa-sharp fa-regular fa-arrow-left-long"></i>
                     </button>

                     <button data-slider-next="#serviceSliderOne" class="slider-arrow style1 slider-next" type="button" aria-label="Next Services">
                           <i class="fa-regular fa-arrow-right-long"></i>
                     </button>

                  </div>

               </div>


               <div class="row">

                  <div class="slider-area serviceSliderOne">

                     <div class="swiper gt-slider"
                           id="serviceSliderOne"
                           data-slider-options='{
                              "loop": true,
                              "breakpoints": {
                                 "0": {
                                       "slidesPerView": 1
                                 },
                                 "576": {
                                       "slidesPerView": 2,
                                       "centeredSlides": true
                                 },
                                 "768": {
                                       "slidesPerView": 2
                                 },
                                 "992": {
                                       "slidesPerView": 3
                                 },
                                 "1200": {
                                       "slidesPerView": 4
                                 }
                              }
                           }'
                     >

                           <div class="swiper-wrapper">
                              <?php

                              $serviceIndex = 0;
                              foreach ($services as $slug => $service):
                                 // Cycle animation delay
                                 $delays = ['.3s', '.5s', '.7s', '.9s'];

                                 $delay = $delays[$serviceIndex % count($delays)];

                                 $serviceIndex++;
                              ?>

                                 <!-- Service Item -->
                                 <div class="swiper-slide">

                                       <div class="service-card style1 wow fadeInUp" data-wow-delay="<?= htmlspecialchars($delay) ?>">

                                          <!-- Service Icon -->
                                          <div class="icon">

                                             <img src="assets/img/icon/<?= htmlspecialchars($service['icon']) ?>" alt="<?= htmlspecialchars($service['title']) ?>">

                                          </div>

                                          <!-- Service Body -->
                                          <div class="body">

                                             <h3>

                                                   <a href="service-details.php?slug=<?= urlencode($slug) ?>">
                                                      <?= htmlspecialchars($service['title']) ?>
                                                   </a>

                                             </h3>

                                             <p>
                                                   <?= htmlspecialchars($service['short_description']) ?>
                                             </p>

                                             <a href="service-details.php?slug=<?= urlencode($slug) ?>" class="link-btn style1">
                                                   Read more
                                                   <i class="fa-regular fa-chevrons-right"></i>
                                             </a>

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

   </section>
   <!-- Service Section    E N D -->

   <!-- About Section    S T A R T -->
   <section class="about-section space fix bg-theme-color">
      <div class="about-container-wrapper style1">
         <div class="shape1"><img src="assets/img/shape/aboutShape1_1.png" alt="shape"></div>
         <div class="shape2"><img src="assets/img/shape/aboutShape1_2.png" alt="shape"></div>
         <div class="shape3"><img src="assets/img/shape/aboutShape1_3.png" alt="shape"></div>
         <div class="container">

            <div class="row gy-5 gx-70">

               <div class="col-xl-6">
                  <div class="about-thumb">

                     <div class="thumb1">
                        <img class="img-custom-anim-left wow fadeInUp" data-wow-delay=".5s"
                           src="assets/img/about/aboutThumb1_1.png" alt="thumb">

                        <!-- SVG Mask -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style="position: absolute;">
                           <clipPath id="aboutThumbdMask1">
                              <path
                                 d="M0 20C0 8.95431 8.9543 0 20 0H395.5C423.114 0 445.5 22.3858 445.5 50V72.5C445.5 100.114 467.886 122.5 495.5 122.5H520C547.614 122.5 570 144.886 570 172.5V321.5L562.197 537.223C561.808 547.98 552.975 556.5 542.21 556.5H20C8.95432 556.5 0 547.546 0 536.5V20Z" />
                           </clipPath>
                        </svg>
                     </div>

                     <div class="thumb2">
                        <img class="img-custom-anim-top wow fadeInUp" data-wow-delay=".8s"
                           src="assets/img/about/aboutThumb1_2.png" alt="thumb">
                     </div>

                  </div>
               </div>

               <div class="col-xl-6">
                  <div class="about-content">
                     <div class="section-title mxw-560">
                        <div class="subtitle text-white wow fadeInUp" data-wow-delay=".3s"> <img
                              src="assets/img/icon/arrowLeftWhite.svg" alt="icon"> <span class="text-white"> about
                              company
                           </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"></div>
                        <h2 class="title text-white wow fadeInUp" data-wow-delay=".6s">Empowering Digital Transformation Through Expert Engineering</h2>
                        <p class="mt-25 text-white wow fadeInUp" data-wow-delay=".5s">We are a dedicated team of technology innovators delivering robust software, scalable cloud architectures, and user-centric digital experiences. Our commitment is to turn complex challenges into seamless, high-performance business solutions.</p>
                     </div>
                     <div class="fancy-box-wrapper style2">

                       <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".3s">
                           <div class="item">
                              <div class="icon">
                                    <i class="bi bi-code-slash"></i>
                              </div>
                           </div>

                           <div class="item">
                              <h6>Full-Stack Development</h6>
                           </div>
                        </div>

                        <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".5s">
                           <div class="item">
                              <div class="icon">
                                    <i class="bi bi-cloud-check"></i>
                              </div>
                           </div>

                           <div class="item">
                              <h6>Cloud & Infrastructure</h6>
                           </div>
                        </div>

                        <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".5s">
                           <div class="item">
                              <div class="icon">
                                    <i class="bi-window"></i>
                              </div>
                           </div>

                           <div class="item">
                              <h6>Web Development</h6>
                           </div>
                        </div>

                     </div>
                     <div class="counter-box-wrapper style1">
                        <div class="counter-box style1 wow fadeInUp" data-wow-delay=".3s">
                           <h3>
                              <span class="counter-number">250</span> +
                           </h3>
                           <h6>Projects Done</h6>
                        </div>
                        <div class="counter-box style1 wow fadeInUp" data-wow-delay=".5s">
                           <h3>
                              <span class="counter-number">120</span> +
                           </h3>
                           <h6>Happy Clients</h6>
                        </div>
                        <div class="counter-box style1 wow fadeInUp" data-wow-delay=".8s">
                           <h3>
                              <span class="counter-number">15</span> +
                           </h3>
                           <h6>Team Experts</h6>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            
         </div>
      </div>
   </section>

   <!-- Project Section   S T A R T -->
      <section class="project-section space fix">

         <div class="project-container-wrapper style1">

            <div class="container">

                  <!-- Section Title -->

                  <div class="section-title title-area mx-auto mb-10">

                     <div class="subtitle d-flex justify-content-center">

                        <img
                              src="assets/img/icon/arrowLeft.svg"
                              alt="icon"
                        >

                        <span>
                              Examples of our work
                        </span>

                        <img
                              src="assets/img/icon/arrowRight.svg"
                              alt="icon"
                        >

                     </div>

                     <h2 class="title text-center">
                        Check Our Latest Portfolios
                     </h2>

                  </div>

                  <!-- =========================================
                     Navigation Cards
                  ========================================== -->
                  <div class="project-item-wrapper style1">

                     <?php

                     $projectIndex = 0;

                     foreach ($projects as $category => $project):

                        $delays = ['.2s', '.4s', '.6s', '.8s', '1s'];

                        $delay = $delays[$projectIndex % count($delays)];

                        /*
                           * Keep UI/UX active by default
                           */
                        $active = ($category === 'ui-ux') ? 'active' : '';

                        $projectIndex++;

                     ?>

                        <div
                              class="project-item-card style1 <?= $active ?> wow fadeInUp"
                              data-wow-delay="<?= htmlspecialchars($delay) ?>"
                              data-category="<?= htmlspecialchars($category) ?>"
                        >

                              <div class="project-icon">

                                 <img
                                    src="assets/img/icon/<?= htmlspecialchars($project['icon']) ?>"
                                    alt="<?= htmlspecialchars($project['title']) ?>"
                                 >

                              </div>


                              <h5>
                                 <?= htmlspecialchars($project['title']) ?>
                              </h5>

                        </div>

                     <?php endforeach; ?>

                  </div>

                  <!-- =========================================
                     Dynamic Project Content
                  ========================================== -->

                  <div class="project-wrapper style1">

                     <div class="row gy-5 gx-60">

                        <!-- Main Image -->
                        <div class="col-xl-5">

                              <div class="project-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".5s">
                                 <img id="project-main-thumb" src="assets/img/project/projectThumb1_1.png" alt="Project">
                              </div>

                        </div>

                        <!-- Content -->
                        <div class="col-xl-7">

                              <div class="project-content-wrapper style1">

                                 <div class="project-content style1">

                                    <div class="row">

                                          <!-- Left Content -->
                                          <div class="col-xl-9">

                                             <div class="project-content-left">

                                                <h3 id="project-title">Detailing of our Project</h3>

                                                <p id="project-desc" class="text">
                                                      There are many variations passages of
                                                      Lorem Ipsum available but the majority
                                                      have suffered alteration in some form
                                                      by injected humour.
                                                </p>

                                                <!-- Features -->
                                                <div class="fancy-box-wrapper style3">

                                                      <!-- Feature 1 -->
                                                      <div class="fancy-box style3">

                                                         <div class="item">

                                                            <div class="icon">
                                                                  <img src="assets/img/icon/projectIcon1_1.svg" alt="icon">
                                                            </div>

                                                         </div>


                                                         <div class="item">
                                                            <h6 id="feature-1">Responsive website</h6>
                                                         </div>

                                                      </div>


                                                      <!-- Feature 2 -->
                                                      <div class="fancy-box style3">

                                                         <div class="item">

                                                            <div class="icon">
                                                                  <img src="assets/img/icon/projectIcon1_2.svg" alt="icon">
                                                            </div>

                                                         </div>

                                                         <div class="item">

                                                            <h6 id="feature-2">100% Customers Satisfaction</h6>

                                                         </div>

                                                      </div>

                                                </div>

                                                <!-- Feature 3 -->
                                                <div class="fancy-box style3">

                                                      <div class="item">
                                                         <div class="icon">
                                                            <img src="assets/img/icon/projectIcon1_3.svg" alt="icon">
                                                         </div>
                                                      </div>


                                                      <div class="item">
                                                         <h6 id="feature-3">Big Data & Analytics</h6>
                                                      </div>

                                                </div>

                                             </div>

                                          </div>

                                          <!-- Secondary Image -->
                                          <div class="col-xl-3">

                                             <div class="project-content-right">

                                                <img id="project-sub-thumb" class="img-custom-anim-right wow fadeInUp" data-wow-delay=".6s" src="assets/img/project/projectThumb1_2.png" alt="Project">

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
   <!-- Project Section   E N D -->

   <script>
      document.addEventListener('DOMContentLoaded', function () {

         const projects = <?= json_encode($projects, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;

         const projectCards = document.querySelectorAll('.project-item-card');

         const projectTitle = document.getElementById('project-title');
         const projectDesc = document.getElementById('project-desc');

         const projectMainThumb = document.getElementById('project-main-thumb');
         const projectSubThumb = document.getElementById('project-sub-thumb');

         const feature1 = document.getElementById('feature-1');
         const feature2 = document.getElementById('feature-2');
         const feature3 = document.getElementById('feature-3');


         function loadProject(category) {

            if (!projects[category]) {
                  return;
            }

            const project = projects[category];


            // -----------------------------
            // Active Category
            // -----------------------------

            projectCards.forEach(card => {

                  card.classList.remove('active');

                  if (card.dataset.category === category) {
                     card.classList.add('active');
                  }

            });


            // -----------------------------
            // Title
            // -----------------------------

            projectTitle.textContent = project.title;

            // -----------------------------
            // Description
            // -----------------------------

            projectDesc.textContent = project.description;


            // -----------------------------
            // Main Image
            // -----------------------------

            projectMainThumb.src = project.main_image;
            projectMainThumb.alt = project.title;
            // -----------------------------
            // Secondary Image
            // -----------------------------

            projectSubThumb.src =  project.sub_image;
            projectSubThumb.alt = project.title;


            // -----------------------------
            // Features
            // -----------------------------

            feature1.textContent =
                  project.features[0] ?? '';

            feature2.textContent =
                  project.features[1] ?? '';

            feature3.textContent =
                  project.features[2] ?? '';

         }


         // -----------------------------
         // Category Click
         // -----------------------------

         projectCards.forEach(card => {

            card.addEventListener('click', function () {

                  const category = this.dataset.category;

                  loadProject(category);

            });

         });


         // -----------------------------
         // Default Project
         // -----------------------------

         loadProject('ui-ux');

      });
   </script>

   <!-- Video Section    S T A R T -->
   <div class="video-box-area wow fadeInUp" data-wow-delay="0.6s">
      <div class="video-wrap style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".6s">
         <div class="container">
            <div class="video-box fix background-image" data-bg-src="assets/img/video/videoThumb1_1.png">
               <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8" class="play-btn popup-video"><i
                     class="fa-sharp fa-solid fa-play"></i></a>
            </div>
         </div>
      </div>
   </div>

   <!-- Work Process Section   S T A R T -->
   <section class="work-process-section space bg-theme-color2 fix">
      <div class="work-process-wrapper style1 space pb-0">
         <div class="container">
            <div class="row gy-5">
               <div class="col-xl-3">
                  <div class="work-process-card style1 wow fadeInUp" data-wow-delay=".2s">
                     <div class="number">01</div>
                     <h3 class="title">Requirement Analysis</h3>
                     <p class="text">We collaborate closely with you to gather project specifications, define core business objectives, and outline precise technical scopes.</p>
                  </div>
               </div>
               <div class="col-xl-3">
                  <div class="work-process-card style1 active wow fadeInUp" data-wow-delay=".4s">
                     <div class="number">02</div>
                     <h3 class="title">UI/UX Desing</h3>
                     <p class="text">Our team crafts intuitive user interfaces and interactive wireframes designed to ensure engaging and user-centric digital experiences.</p>
                  </div>
               </div>
               <div class="col-xl-3">
                  <div class="work-process-card style1 wow fadeInUp" data-wow-delay=".6s">
                     <div class="number">03</div>
                     <h3 class="title">Prototype & Testing</h3>
                     <p class="text">We build functional prototypes and run rigorous testing phases to refine user flows, validate features, and ensure flawless performance.</p>
                  </div>
               </div>
               <div class="col-xl-3">
                  <div class="work-process-card style1 wow fadeInUp" data-wow-delay=".8s">
                     <div class="number">04</div>
                     <h3 class="title">Deployment & Support</h3>
                     <p class="text">We write clean, scalable code and deploy your product securely to production, providing ongoing maintenance and technical support.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Team Section   S T A R T -->
   <section class="team-section  fix d-none">
      <div class="team-wrapper space style1" data-bg-src="assets/img/bg/teamBg1_1.png">
         <div class="container">
            <div class="row">
               <div class="col-12 d-flex justify-content-center">
                  <div class="section-title title-area  mx-auto mb-45">
                     <div class="subtitle d-flex justify-content-center"> <img src="assets/img/icon/arrowLeft.svg"
                           alt="icon"> <span> Our Expert
                        </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                     <h2 class="title text-center">See Our Skilled Expert Team</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="slider-area">
                  <div class="swiper gt-slider teamSliderOne" id="teamSliderOne"
                     data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1,"centeredSlides":true},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1300":{"slidesPerView":4}}}'>
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="team-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                              <div class="team-card-thumb">
                                 <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png" alt="shape"></div>
                                 <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png" alt="shape"></div>

                                 <img class="thumbimg" src="assets/img/team/teamThumb1_1.png" alt="thumb">


                                 <!-- SVG Mask -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                    style="position: absolute;">
                                    <clipPath id="teamCardMask">
                                       <path
                                          d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z" />
                                    </clipPath>
                                 </svg>
                              </div>

                              <div class="team-content">
                                 <h3><a href="team-details.html">Wade Warren</a></h3>
                                 <p>Medical Assistant</p>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="team-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".6s">
                              <div class="team-card-thumb">
                                 <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png" alt="shape"></div>
                                 <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png" alt="shape"></div>

                                 <img class="thumbimg" src="assets/img/team/teamThumb1_2.png" alt="thumb">


                                 <!-- SVG Mask -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                    style="position: absolute;">
                                    <clipPath id="teamCardMask2">
                                       <path
                                          d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z" />
                                    </clipPath>
                                 </svg>
                              </div>

                              <div class="team-content">
                                 <h3><a href="team-details.html">Masirul Islam</a></h3>
                                 <p>Manager Assistant</p>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="team-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".8s">
                              <div class="team-card-thumb">
                                 <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png" alt="shape"></div>
                                 <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png" alt="shape"></div>

                                 <img class="thumbimg" src="assets/img/team/teamThumb1_3.png" alt="thumb">


                                 <!-- SVG Mask -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                    style="position: absolute;">
                                    <clipPath id="teamCardMask3">
                                       <path
                                          d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z" />
                                    </clipPath>
                                 </svg>
                              </div>

                              <div class="team-content">
                                 <h3><a href="team-details.html">Jenny Wilson</a></h3>
                                 <p>Web Designer</p>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="team-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay="1s">
                              <div class="team-card-thumb">
                                 <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png" alt="shape"></div>
                                 <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png" alt="shape"></div>

                                 <img class="thumbimg" src="assets/img/team/teamThumb1_4.png" alt="thumb">


                                 <!-- SVG Mask -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                    style="position: absolute;">
                                    <clipPath id="teamCardMask4">
                                       <path
                                          d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z" />
                                    </clipPath>
                                 </svg>
                              </div>

                              <div class="team-content">
                                 <h3><a href="team-details.html">Floyd Miles</a></h3>
                                 <p>Head Assistant</p>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="team-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                              <div class="team-card-thumb">
                                 <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png" alt="shape"></div>
                                 <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png" alt="shape"></div>

                                 <img class="thumbimg" src="assets/img/team/teamThumb1_1.png" alt="thumb">


                                 <!-- SVG Mask -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                    style="position: absolute;">
                                    <clipPath id="teamCardMask5">
                                       <path
                                          d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z" />
                                    </clipPath>
                                 </svg>
                              </div>

                              <div class="team-content">
                                 <h3><a href="team-details.html">Wade Warren</a></h3>
                                 <p>Medical Assistant</p>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="team-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".8s">
                              <div class="team-card-thumb">
                                 <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png" alt="shape"></div>
                                 <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png" alt="shape"></div>

                                 <img class="thumbimg" src="assets/img/team/teamThumb1_2.png" alt="thumb">


                                 <!-- SVG Mask -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                    style="position: absolute;">
                                    <clipPath id="teamCardMask6">
                                       <path
                                          d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z" />
                                    </clipPath>
                                 </svg>
                              </div>

                              <div class="team-content">
                                 <h3><a href="team-details.html">Masirul Islam</a></h3>
                                 <p>Manager Assistant</p>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="team-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                              <div class="team-card-thumb">
                                 <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png" alt="shape"></div>
                                 <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png" alt="shape"></div>

                                 <img class="thumbimg" src="assets/img/team/teamThumb1_3.png" alt="thumb">


                                 <!-- SVG Mask -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                    style="position: absolute;">
                                    <clipPath id="teamCardMask7">
                                       <path
                                          d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z" />
                                    </clipPath>
                                 </svg>
                              </div>

                              <div class="team-content">
                                 <h3><a href="team-details.html">Jenny Wilson</a></h3>
                                 <p>Web Designer</p>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="team-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".6s">
                              <div class="team-card-thumb">
                                 <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png" alt="shape"></div>
                                 <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png" alt="shape"></div>

                                 <img class="thumbimg" src="assets/img/team/teamThumb1_4.png" alt="thumb">


                                 <!-- SVG Mask -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                    style="position: absolute;">
                                    <clipPath id="teamCardMask8">
                                       <path
                                          d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z" />
                                    </clipPath>
                                 </svg>
                              </div>

                              <div class="team-content">
                                 <h3><a href="team-details.html">Floyd Miles</a></h3>
                                 <p>Head Assistant</p>
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

   <!-- Faq Section   S T A R T -->
   <section class="faq-section space pb-0 fix">
      <div class="container">
         <div class="faq-wrapper style1">
            <div class="row gy-5">
               <div class="col-xl-6">
                  <div class="faq-thumb">
                     <img class="thumb1 img-custom-anim-top wow fadeInUp" data-wow-delay=".4s"
                        src="assets/img/faq/faqThumb1_1.png" alt="thumb">
                     <div class="thumb2"><img src="assets/img/faq/faqThumb1_2.png" alt="thumb"></div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="section-title mxw-560">
                     <div class="subtitle"> <img src="assets/img/icon/arrowLeft.svg" alt="icon"> <span> Faq
                        </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                     <h2 class="title">Prioritize Your Site’s Safety and Security</h2>
                  </div>
                  <div class="faq-content style1">
                     <div class="faq-accordion">
                        <div class="accordion" id="accordion">

                           <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                              <h5 class="accordion-header">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                    What technology stack do you use for development?
                                 </button>
                              </h5>
                              <div id="faq1" class="accordion-collapse show" data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                    We leverage modern, industry-standard technologies including PHP, Laravel, HTML5, CSS3, JavaScript, Bootstrap 5, and robust cloud platforms to build scalable, high-performance web applications.
                                 </div>
                              </div>
                           </div>

                           <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                              <h5 class="accordion-header">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    How long does it typically take to complete a project?
                                 </button>
                              </h5>
                              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                    Project timelines vary depending on the scope and complexity. A standard web design or medium-scale application usually takes anywhere from 2 to 6 weeks from initial requirement analysis to final deployment.
                                 </div>
                              </div>
                           </div>

                           <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                              <h5 class="accordion-header">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    What is included in your development services?
                                 </button>
                              </h5>
                              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                    Our services encompass end-to-end solutions including requirement analysis, UI/UX prototyping, custom front-end and back-end development, database architecture, cloud setup, and ongoing post-launch support.
                                 </div>
                              </div>
                           </div>

                           <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                              <h5 class="accordion-header">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                    Do you provide ongoing maintenance after launch?
                                 </button>
                              </h5>
                              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                    Yes, we offer comprehensive post-launch maintenance, security monitoring, performance optimizations, and feature updates to ensure your digital platform remains secure and up-to-date.
                                 </div>
                              </div>
                           </div>

                           <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                              <h5 class="accordion-header">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                    Can you customize existing applications or integrate third-party APIs?
                                 </button>
                              </h5>
                              <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                  Yes, we specialize in enhancing existing systems, refactoring codebases, and integrating secure third-party APIs such as payment gateways, CRM solutions, and cloud services to expand your platform's capabilities.
                                 </div>
                              </div>
                           </div>

                           <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                              <h5 class="accordion-header">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                    How do you ensure the security of our data and application?
                                 </button>
                              </h5>
                              <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                  We adhere to industry best practices, implementing secure database architecture, encrypted data pipelines, secure authentication, and rigorous testing protocols to safeguard your application and user data against potential vulnerabilities.
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

   <!-- Cta Section   S T A R T -->
   <section class="cta-section space pb-0">
      <div class="container">
         <div class="cta-wrap style1 fix">
            <div class="shape"><img src="assets/img/shape/ctaShape1_1.png" alt="shape"></div>
            <div class="row gy-5">
               <div class="col-xl-3">
                  <div class="cta-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                     <img src="assets/img/cta/ctaThumb1_1.png" alt="thumb">
                  </div>
               </div>
               <div class="col-xl-6 d-flex align-items-center">
                  <div class="section-title">
                     <div class="subtitle"> <img src="assets/img/icon/arrowLeftWhite.svg" alt="icon"> <span
                           class="text-white"> Contact US
                        </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"></div>
                     <h2 class="title">24/7 Expert Technical Support Our Clients Rely On</h2>
                  </div>
               </div>
               <div class="col-xl-3 d-flex align-items-center">
                  <div class="btn-wrapper">
                     <a class="gt-btn style5" href="contact.html">TALK TO A SPECIALIST<i
                           class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Testimonial Section   S T A R T -->
   <section class="testimonial-section space pb-0 fix wow fadeInUp" data-wow-delay=".5s"
      data-bg-src="assets/img/bg/testimonialBg1_1.png">
      <div class="testimonial-wrap style3 space">
         <div class="container">
            <div class="row">
               <div class="col-12 d-flex justify-content-center">
                  <div class="section-title title-area mb-50 mx-auto">
                     <div class="subtitle d-flex justify-content-center"> <img src="assets/img/icon/arrowLeft.svg"
                           alt="icon"> <span> Testimonials
                        </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                     <h2 class="title text-center">Our Latest Client Feedback</h2>
                  </div>
               </div>
            </div>
            <div class="slider-area">
               <div class="swiper gt-slider testimonial-slider3" id="testimonialSlider3"
                  data-slider-options='{"loop": true,"centeredSlides":true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                  <div class="swiper-wrapper">

                     <div class="swiper-slide">
                        <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                           <ul class="star-wrap">
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                           </ul>
                           <p class="text">"Their expertise in custom web development and cloud infrastructure transformed our operations. The team delivered a secure, high-performance platform right on schedule."
                           </p>
                           <div class="profile-box">
                              <div class="testi-thumb">
                                 <img src="assets/img/testimonial/testiThumb3_1.png" alt="thumb">
                              </div>
                              <div class="testi-content">
                                 <h3 class="title">Rajesh Patel</h3>
                                 <div class="designation">Director, Enterprise Solutions</div>
                              </div>
                           </div>
                           <div class="quote">
                              <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                              <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                           </div>
                           <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png" alt="shape">
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                           <ul class="star-wrap">
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                           </ul>
                           <p class="text">"Outstanding UI/UX design and seamless API integrations! They truly understood our requirements and provided a user-centric solution that significantly boosted our engagement."
                           </p>
                           <div class="profile-box">
                              <div class="testi-thumb">
                                 <img src="assets/img/testimonial/testiThumb3_2.png" alt="thumb">
                              </div>
                              <div class="testi-content">
                                 <h3 class="title">Priya Sharma</h3>
                                 <div class="designation">Founder, Digital Retail Hub</div>
                              </div>
                           </div>
                           <div class="quote">
                              <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                              <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                           </div>
                           <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png" alt="shape">
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                           <ul class="star-wrap">
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                           </ul>
                           <p class="text">"Their 24/7 technical support and deep understanding of database architecture gave us complete peace of mind. Exceptional service from a highly professional team! "
                           </p>
                           <div class="profile-box">
                              <div class="testi-thumb">
                                 <img src="assets/img/testimonial/testiThumb3_3.png" alt="thumb">
                              </div>
                              <div class="testi-content">
                                 <h3 class="title">Amit Desai</h3>
                                 <div class="designation">CTO, TechVanguard Systems</div>
                              </div>
                           </div>
                           <div class="quote">
                              <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                              <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                           </div>
                           <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png" alt="shape">
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                           <ul class="star-wrap">
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                           </ul>
                           <p class="text">"Working with their development team was a game-changer for our mobile application. The code quality, attention to detail, and rapid delivery exceeded our expectations."
                           </p>
                           <div class="profile-box">
                              <div class="testi-thumb">
                                 <img src="assets/img/testimonial/testiThumb3_1.png" alt="thumb">
                              </div>
                              <div class="testi-content">
                                 <h3 class="title">Neha Gupta</h3>
                                 <div class="designation">Product Manager, FinTech Solutions</div>
                              </div>
                           </div>
                           <div class="quote">
                              <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                              <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                           </div>
                           <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png" alt="shape">
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                           <ul class="star-wrap">
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                           </ul>
                           <p class="text">"Their robust IT infrastructure and cloud setup streamlined our entire data pipeline. System downtime is a thing of the past thanks to their expert engineering."
                           </p>
                           <div class="profile-box">
                              <div class="testi-thumb">
                                 <img src="assets/img/testimonial/testiThumb3_2.png" alt="thumb">
                              </div>
                              <div class="testi-content">
                                 <h3 class="title">Vikram Mehta</h3>
                                 <div class="designation">Operations Head, Logistics Net</div>
                              </div>
                           </div>
                           <div class="quote">
                              <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                              <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                           </div>
                           <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png" alt="shape">
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                           <ul class="star-wrap">
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                              <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                           </ul>
                           <p class="text">"From custom database architecture to sleek frontend design, they handled everything with absolute professionalism. Our conversion rates have noticeably spiked!"
                           </p>
                           <div class="profile-box">
                              <div class="testi-thumb">
                                 <img src="assets/img/testimonial/testiThumb3_3.png" alt="thumb">
                              </div>
                              <div class="testi-content">
                                 <h3 class="title">Ananya Joshi</h3>
                                 <div class="designation">E-Commerce Entrepreneur</div>
                              </div>
                           </div>
                           <div class="quote">
                              <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                              <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                           </div>
                           <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png" alt="shape">
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="slider-pagination"></div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Blog Section    S T A R T -->
   <section class="blog-section space fix">
      <div class="blog-wrapper style1 space pt-0">
         <div class="container">

            <div class="title-wrap mb-45">
               <div class="section-title">

                  <div class="subtitle">
                     <img src="assets/img/icon/arrowLeft.svg" alt="icon">

                     <span>Blog & News</span>

                     <img src="assets/img/icon/arrowRight.svg" alt="icon">
                  </div>

                  <h2 class="title">
                     Featured News And Insights
                  </h2>

               </div>

               <div class="arrow-btn text-end wow fadeInUp" data-wow-delay=".9s">

                  <button
                     data-slider-prev="#blogSliderOne"
                     class="slider-arrow style1"
                     type="button"
                  >
                     <i class="fa-sharp fa-regular fa-arrow-left-long"></i>
                  </button>

                  <button
                     data-slider-next="#blogSliderOne"
                     class="slider-arrow style1 slider-next"
                     type="button"
                  >
                     <i class="fa-regular fa-arrow-right-long"></i>
                  </button>

               </div>
            </div>


            <div class="row">

               <div class="slider-area blogSliderOne">

                  <div
                     class="swiper gt-slider"
                     id="blogSliderOne"
                     data-slider-options='{
                        "loop": true,
                        "breakpoints": {
                           "0": {
                              "slidesPerView": 1
                           },
                           "576": {
                              "slidesPerView": 1,
                              "centeredSlides": true
                           },
                           "768": {
                              "slidesPerView": 2
                           },
                           "992": {
                              "slidesPerView": 2
                           },
                           "1200": {
                              "slidesPerView": 3
                           }
                        }
                     }'
                  >

                     <div class="swiper-wrapper">

                        <?php
                        $blogIndex = 0;

                        foreach ($blogs as $slug => $blog):

                           $delays = ['.4s', '.6s', '.8s', '1s'];
                           $delay = $delays[$blogIndex % count($delays)];

                           $blogIndex++;

                           /*
                           * Date formatting
                           */
                           $formattedDate = '';

                           if (!empty($blog['date'])) {

                              $date = DateTime::createFromFormat(
                                 'Y-m-d',
                                 $blog['date']
                              );

                              if ($date) {
                                 $formattedDate = $date->format('F d, Y');
                              }
                           }

                           /*
                           * Safe values
                           */
                           $title = $blog['title'] ?? '';
                           $category = $blog['category'] ?? '';
                           $image = $blog['image'] ?? '';
                           $author = $blog['author'] ?? 'Admin';
                           $profile = $blog['profile'] ?? 'assets/img/blog/blogProfile1_1.png';

                        ?>

                        <div class="swiper-slide">

                           <div
                              class="blog-card style1 img-custom-anim-left wow fadeInUp"
                              data-wow-delay="<?= htmlspecialchars($delay) ?>"
                           >

                              <!-- Blog Image -->
                              <div class="blog-card-thumb">

                                 <a href="news-details.php?slug=<?= urlencode($slug) ?>">

                                    <img
                                       src="<?= htmlspecialchars($image) ?>"
                                       alt="<?= htmlspecialchars($title) ?>"
                                       loading="lazy"
                                    >

                                 </a>

                              </div>


                              <!-- Blog Body -->
                              <div class="blog-card-body">

                                 <div class="blog-meta">

                                    <div class="tag">
                                       <?= htmlspecialchars($category) ?>
                                    </div>

                                    <div class="date">
                                       <?= htmlspecialchars($formattedDate) ?>
                                    </div>

                                 </div>


                                 <h3>

                                    <a
                                       href="news-details.php?slug=<?= urlencode($slug) ?>"
                                    >
                                       <?= htmlspecialchars($title) ?>
                                    </a>

                                 </h3>


                                 <!-- Author -->
                                 <div class="author-meta">

                                    <div class="fancy-box style1">

                                       <div class="item">

                                          <img
                                             src="<?= htmlspecialchars($profile) ?>"
                                             alt="<?= htmlspecialchars($author) ?>"
                                             loading="lazy"
                                          >

                                       </div>

                                       <div class="item">

                                          <h6>
                                             <?= htmlspecialchars($author) ?>
                                          </h6>

                                          <p>
                                             Co, Founder
                                          </p>

                                       </div>

                                    </div>


                                    <!-- Read More -->
                                    <a
                                       class="link-btn style1"
                                       href="news-details.php?slug=<?= urlencode($slug) ?>"
                                       aria-label="Read <?= htmlspecialchars($title) ?>"
                                    >
                                       <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                 </div>

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
   </section>
   
   <!-- Cta Section   S T A R T -->
   <section class="cta-section space pb-0 mt-n150 mb-n116 z-5">
      <div class="container">
         <div class="cta-wrap style2">
            <div class="shape1_1 rotate360 d-none d-xl-block"><img src="assets/img/shape/ctaShape2_1.png" alt="shape">
            </div>
            <div class="shape1_2 d-none d-xl-block"><img src="assets/img/shape/ctaShape2_2.png" alt="shape"> </div>
            <div class="shape1_3 d-none d-xl-block"><img src="assets/img/shape/ctaShape2_3.png" alt="shape"></div>
            <div class="shape1_4 d-none d-xl-block"><img src="assets/img/shape/ctaShape2_4.png" alt="shape"></div>
            <div class="cta-thumb d-none d-xl-block">
               <img src="assets/img/cta/ctaThumb.png" alt="thumb">
            </div>
            <h3 class="cta-title text-white wow fadeInUp" data-wow-delay=".3s">Stay Connected With Cutting Edge IT
            </h3>
            <div class="btn-wrapper">
               <a class="gt-btn style5" href="contact.html">Talk to a Specialist<i
                     class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
            </div>
         </div>
      </div>
   </section>

<?php
include_once ('elements/footer.php')
?>
