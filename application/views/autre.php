<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/swiper-bundle.min.css');?>" />

    <!-- CSS -->  
    <link rel="stylesheet" href="<?php echo site_url('assets/css/styleAutre.css'); ?>" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/styleMenu.css'); ?>" />
    <link rel="stylesheet" href="<?php echo site_url('assets/css/button.css');?>" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">MyProject</div>
        <i class='bx bx-menu' id="btn" ></i>
      </div>
      <ul class="nav-list">
        <li>
          <i class='bx bx-search' ></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
           <span class="tooltip">Dashboard</span>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-user' ></i>
              <span class="links_name">User</span>
            </a>
            <span class="tooltip">User</span>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-chat' ></i>
              <span class="links_name">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">Analytics</span>
            </a>
            <span class="tooltip">Analytics</span>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-folder' ></i>
              <span class="links_name">File Manager</span>
            </a>
            <span class="tooltip">Files</span>
          </li>
          <li>
            <a href="#">
           <i class='bx bx-cart-alt' ></i>
           <span class="links_name">Order</span>
          </a>
         <span class="tooltip">Order</span>
        </li>
       <li>
         <a href="#">
           <i class='bx bx-heart' ></i>
           <span class="links_name">Saved</span>
         </a>
         <span class="tooltip">Saved</span>
        </li>
       <li>
         <a href="#">
           <i class='bx bx-cog' ></i>
           <span class="links_name">Setting</span>
          </a>
          <span class="tooltip">Setting</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="assets/img/profile/profile1.jpg" alt="profileImg">
            <div class="name_job">
              <div class="name">Prem Shahi</div>
              <div class="job">Web designer</div>
            </div>
          </div>
          <i class='bx bx-log-out' id="log_out" ></i>
        </li>
      </ul>
    </div>
    <div class="container" style="margin-top: 15%;margin-left: 50px;">
          <div id="title">
            <img src="assets/img/profile/profile1.jpg" alt="" />
          </div>
          <div class="container swiper">
            <div class="slide-container">
              <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                  <div class="image-box">
                    <img src="assets/img/showImg/fullDev.jpg" alt="" />
                  </div>
                  <div class="profile-details">
                    <img src="assets/img/profile/profile1.jpg" alt="" />
                    <div class="name-job">
                      <h3 class="name">David Cardlos</h3>
                      <h4 class="job">Full Stack Developer</h4>
                    </div>
                    <button class="button">Click Me</button>
                  </div>
                </div>
              <div class="card swiper-slide">
                <div class="image-box">
                  <img src="assets/img/showImg/photographer.jpg" alt="" />
                </div>
                <div class="profile-details">
                  <img src="assets/img/profile/profile2.jpg" alt="" />
                  <div class="name-job">
                    <h3 class="name">Siliana Ramis</h3>
                    <h4 class="job">Photographer</h4>
                  </div>
                  <button class="button">Click Me</button>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-box">
                  <img src="assets/img/showImg/dataAna.jpg" alt="" />
                </div>
                <div class="profile-details">
                  <img src="assets/img/profile/profile3.jpg" alt="" />
                  <div class="name-job">
                    <h3 class="name">Richard Bond</h3>
                    <h4 class="job">Data Analyst</h4>
                  </div>
                  <button class="button">Click Me</button>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-box">
                  <img src="assets/img/showImg/appDev.jpg" alt="" />
                </div>
                <div class="profile-details">
                  <img src="assets/img/profile/profile4.jpg" alt="" />
                  <div class="name-job">
                    <h3 class="name">Priase</h3>
                    <h4 class="job">App Developer</h4>
                  </div>
                  <button class="button">Click Me</button>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-box">
                  <img src="assets/img/showImg/blogger.jpg" alt="" />
                </div>
                <div class="profile-details">
                  <img src="assets/img/profile/profile5.jpg" alt="" />
                  <div class="name-job">
                    <h3 class="name">James Laze</h3>
                    <h4 class="job">Blogger</h4>
                  </div>
                  <button class="button">Click Me</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next swiper-navBtn"></div>
          <div class="swiper-button-prev swiper-navBtn"></div>
          <div class="swiper-pagination"></div>
        </div>
        
        <hr>
        
        <!-- faharoa -->
        
        <hr>

        <div id="title" style="margin-top: 2%;">
        <p style="color:white"><?php echo $this->session->nom; ?></p>
          <img src="assets/img/profile/profile1.jpg" alt="" />
        </div>
        <div class="container swiper">
          <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide">
                <div class="image-box">
                  <img src="assets/img/showImg/fullDev.jpg" alt="" />
                </div>
                <div class="profile-details">
                  <img src="assets/img/profile/profile1.jpg" alt="" />
                  <div class="name-job">
                    <h3 class="name">David Cardlos</h3>
                    <h4 class="job">Full Stack Developer</h4>
                  </div>
                  <button class="button">Click Me</button>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-box">
                  <img src="assets/img/showImg/photographer.jpg" alt="" />
                  </div>
                  <div class="profile-details">
                    <img src="assets/img/profile/profile2.jpg" alt="" />
                    <div class="name-job">
                      <h3 class="name">Siliana Ramis</h3>
                      <h4 class="job">Photographer</h4>
                    </div>
                    <button class="button">Click Me</button>
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-box">
                    <img src="assets/img/showImg/dataAna.jpg" alt="" />
                  </div>
                  <div class="profile-details">
                    <img src="assets/img/profile/profile3.jpg" alt="" />
                    <div class="name-job">
                      <h3 class="name">Richard Bond</h3>
                      <h4 class="job">Data Analyst</h4>
                    </div>
                    <button class="button">Click Me</button>
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-box">
                    <img src="assets/img/showImg/appDev.jpg" alt="" />
                  </div>
                  <div class="profile-details">
                    <img src="assets/img/profile/profile4.jpg" alt="" />
                    <div class="name-job">
                      <h3 class="name">Priase</h3>
                      <h4 class="job">App Developer</h4>
                    </div>
                    
                    <button class="button">Click Me</button>
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-box">
                    <img src="assets/img/showImg/blogger.jpg" alt="" />
                  </div>
                  <div class="profile-details">
                    <img src="assets/img/profile/profile5.jpg" alt="" />
                    <div class="name-job">
                      <h3 class="name">James Laze</h3>
                      <h4 class="job">Blogger</h4>
                    </div>
                    <button class="button">Click Me</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <script src="<?php echo site_url('assets/script/swiper-bundle.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/script/scriptAutre1.js');?>"></script>
        <script src="<?php echo site_url('assets/script/scriptAutre2.js'); ?>"></script>
  </body>
</html>
