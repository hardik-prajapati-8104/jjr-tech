   <!-- Footer Area   S T A R T -->
   <?php

   require_once __DIR__ . '/../config/site.php';

   ?>

   <!-- Footer Area Start -->
   <footer class="footer-section pt-100 bg-theme-color2">

      <!-- =========================
         MAIN FOOTER
    ========================== -->
      <div class="widget-area style1 pb-80">

         <div class="container">
            <div class="footer-layout style1">

               <div class="row">

                  <!-- =========================
                         ABOUT / LOGO
                    ========================== -->
                  <div class="col-xl-3 col-md-6 col-12">

                     <div class="widget footer-widget wow fadeInUp" data-wow-delay=".6s">

                        <div class="gt-widget-about">

                           <div class="about-logo">
                              <a href="index.php">
                                 <img src="<?= htmlspecialchars($site['logo']); ?>" alt="<?= htmlspecialchars($site['name']); ?>" width="200" height="auto">
                              </a>
                           </div>

                           <p class="about-text">
                              <?= htmlspecialchars($site['footer_description']); ?>
                           </p>

                           <!-- Social Media -->
                           <div class="gt-social style2">

                              <?php if (!empty($site['social']['facebook'])): ?>

                                 <a href="<?= htmlspecialchars($site['social']['facebook']); ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f"></i>
                                 </a>

                              <?php endif; ?>


                              <?php if (!empty($site['social']['twitter'])): ?>

                                 <a href="<?= htmlspecialchars($site['social']['twitter']); ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-twitter"></i>
                                 </a>

                              <?php endif; ?>


                              <?php if (!empty($site['social']['youtube'])): ?>

                                 <a href="<?= htmlspecialchars($site['social']['youtube']); ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-youtube"></i>
                                 </a>

                              <?php endif; ?>


                              <?php if (!empty($site['social']['instagram'])): ?>

                                 <a href="<?= htmlspecialchars($site['social']['instagram']); ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-instagram"></i>
                                 </a>

                              <?php endif; ?>

                           </div>

                        </div>

                     </div>

                  </div>


                  <!-- =========================
                         QUICK LINKS
                    ========================== -->
                  <div class="col-xl-2 col-md-6 col-12">

                     <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1s">

                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">

                           <ul class="menu">

                              <?php foreach ($site['quick_links'] as $link): ?>

                                 <li>
                                    <a href="<?= htmlspecialchars($link['url']); ?>">

                                       <i class="fa-solid fa-chevrons-right"></i>
                                       <?= htmlspecialchars($link['title']); ?>

                                    </a>
                                 </li>

                              <?php endforeach; ?>

                           </ul>

                        </div>

                     </div>

                  </div>


                  <div class="col-xl-4 col-md-6 col-12">

                     <div class="widget footer-widget wow fadeInUp"
                        data-wow-delay="1.3s">

                        <h3 class="widget_title">Recent Posts</h3>
                           <div class="recent-post-wrap">

                              <?php

                                 /*
                                 * Later these posts can come from
                                 * MySQL database.
                                 */

                                 $recentPosts = [

                                    [
                                       'image' => 'assets/img/footer/footerThumb1_1.png',
                                       'date' => '15th April, 2026',
                                       'title' => 'Top Technology Trends Every Business Should Know',
                                       'url' => 'news-details.php'
                                    ],

                                    [
                                       'image' => 'assets/img/footer/footerThumb1_2.png',
                                       'date' => '20th June, 2026',
                                       'title' => 'How Modern Technology Is Transforming Businesses',
                                       'url' => 'news-details.php'
                                    ]

                                 ];

                              ?>

                              <?php foreach ($recentPosts as $post): ?>

                                 <div class="recent-post">

                                    <div class="media-img">

                                       <a href="<?= htmlspecialchars($post['url']); ?>">
                                          <img src="<?= htmlspecialchars($post['image']); ?>" alt="<?= htmlspecialchars($post['title']); ?>">
                                       </a>

                                    </div>


                                    <div class="media-body">

                                       <div class="recent-post-meta">

                                          <a href="<?= htmlspecialchars($post['url']); ?>">

                                             <img src="assets/img/icon/calendarIcon.svg" alt="calendar">
                                             <?= htmlspecialchars($post['date']); ?>

                                          </a>

                                       </div>


                                       <h4 class="post-title">

                                          <a class="text-inherit" href="<?= htmlspecialchars($post['url']); ?>">
                                             <?= htmlspecialchars($post['title']); ?>
                                          </a>

                                       </h4>

                                    </div>

                                 </div>

                              <?php endforeach; ?>

                           </div>

                     </div>

                  </div>


                  <!-- =========================
                         CONTACT US
                    ========================== -->
                  <div class="col-xl-3 col-md-6 col-12">

                     <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1.6s">

                        <h3 class="widget_title">Contact Us</h3>

                        <div class="checklist style2">

                           <!-- Email -->
                           <ul class="ps-0">

                              <li class="text-white"><i class="fa-solid fa-envelope"></i></li>
                              <li class="text-white">

                                 <a href="mailto:<?= htmlspecialchars($site['contact']['email']); ?>">
                                    <?= htmlspecialchars($site['contact']['email']); ?>
                                 </a>

                              </li>

                           </ul>

                           <!-- Phone -->
                           <ul class="ps-0">

                              <li class="text-white"><i class="fa-solid fa-phone"></i></li>

                              <li class="text-white">

                                 <a href="tel:<?= htmlspecialchars($site['contact']['phone']); ?>">
                                    <?= htmlspecialchars($site['contact']['phone']); ?>
                                 </a>

                              </li>

                           </ul>


                           <!-- Newsletter -->
                           <div class="email-input-container">

                              <input type="email" id="email" placeholder="Your email address" required>
                              <button type="submit" id="submitButton" disabled>
                                 <i class="fa-regular fa-arrow-right-long"></i>
                              </button>

                           </div>


                           <!-- Privacy -->
                           <form id="termsForm">

                              <label class="custom-checkbox">

                                 <input type="checkbox" name="agree" id="agreeCheckbox">
                                 <span class="checkmark"></span>
                                 I agree to the
                                 <a class="text-underline" href="privacy-policy.php" target="_blank">
                                    Privacy Policy
                                 </a>

                              </label>

                           </form>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>


      <!-- =========================
         COPYRIGHT
    ========================== -->
      <div class="copyright-wrap bg-theme">

         <div class="container">

            <div class="copyright-layout">


               <div class="layout-text wow fadeInUp"
                  data-wow-delay=".3s">

                  <p class="copyright">

                     <i class="fal fa-copyright"></i>

                     <?= $site['copyright_year']; ?>

                     All Copyright by

                     <a href="index.php">

                        <?= htmlspecialchars($site['name']); ?>

                     </a>

                  </p>

               </div>


               <div class="layout-link wow fadeInUp"
                  data-wow-delay=".6s">

                  <div class="link-wrapper">

                     <a href="terms-and-conditions.php">
                        Terms &amp; Condition
                     </a>

                     <a href="cookie-policy.php">
                           Cookie Policy
                     </a>

                     <a href="privacy-policy.php">
                        Privacy Policy
                     </a>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </footer>
   <!-- Footer Area End -->

   <!--<< All JS Plugins >>-->
   <script src="assets/js/jquery-3.7.1.min.js"></script>
   <!--<< Viewport Js >>-->
   <script src="assets/js/viewport.jquery.js"></script>
   <!--<< Bootstrap Js >>-->
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <!--<< Nice Select Js >>-->
   <script src="assets/js/jquery.nice-select.min.js"></script>
   <!--<< Waypoints Js >>-->
   <script src="assets/js/jquery.waypoints.js"></script>
   <!--<< Counterup Js >>-->
   <script src="assets/js/jquery.counterup.min.js"></script>
   <!--<< Swiper Slider Js >>-->
   <script src="assets/js/swiper-bundle.min.js"></script>
   <!--<< MeanMenu Js >>-->
   <script src="assets/js/jquery.meanmenu.min.js"></script>
   <!--<< Magnific Popup Js >>-->
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <!--<< Wow Animation Js >>-->
   <script src="assets/js/wow.min.js"></script>
   <!--<< Main.js >>-->
   <script src="assets/js/main.js"></script>
   </body>

   </html>