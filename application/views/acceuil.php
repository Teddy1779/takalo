<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="styleMenu.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <link href="<?php echo site_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
   <link href="<?php echo site_url('assets/style/headers.css');?>" rel="stylesheet">
   <script src="<?php echo site_url('assets/dist/js/bootstrap.bundle.min.js');?>"></script>
<!-- ..... -->
<link rel="stylesheet" href="<?php echo site_url('assets/css/styleAcceuil.css');?>">
<link rel="stylesheet" href="<?php echo site_url('assets/css/styleMenu.css'); ?>" />
<script src="<?php echo site_url('assets/script/scriptAcceuil.js'); ?>"></script>
<!-- ..... -->


<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Takalo</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="<?php echo site_url('Login/autre'); ?>">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Takalo</span>
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
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Prem Shahi</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <!-- Manoratra ao @droite -->
  <section class="home-section">

    <div class="container">
      <div class="search-box" style="text-align: center;">
          <!-- <i class="bx bx-search"></i> -->
          <h1 class="badge bg-dark">Voici vos objets <?php echo $this->session->nom; ?> hbh </h1>
      </div>
      <div class="images">
          <div class="image-box" data-name="spiderman">
              <img src="images/spiderman.jpg" alt="">
              <h6></h6>
              <h6>spiderman<br><button class="btn btn-dark">Okey</button></h6>
          </div>
          
          <div class="image-box" data-name="joker">
              <img src="images/joker.jpg" alt="">
              <h6>joker</h6>
          </div>
          <div class="image-box" data-name="ironman">
            
              <img src="images/ironman.jpg" alt="">
              <button class="btn btn-dark">Okey</button>
              <h6>ironman</h6>
          </div>
          <div class="image-box" data-name="passenger">
              <img src="images/passenger.jpg" alt="">
              <h6>passenger</h6>
          </div>
          <div class="image-box" data-name="space">
              <img src="images/space.jpg" alt="">
              <h6>the space</h6>
          </div>
          <div class="image-box" data-name="spiderman">
              <img src="images/spiderman2.jpg" alt="">
              <h6>spiderman 2</h6>
          </div>
          <div class="image-box" data-name="universe">
              <img src="images/universe.jpg" alt="">
              <h6>the universe</h6>
          </div>
          <div class="image-box" data-name="spiderman">
              <img src="images/spiderman3.jpg" alt="">
              <h6>spiderman 3</h6>
          </div>
          <div class="image-box" data-name="holiday">
              <img src="images/holiday.jpg" alt="">
              <h6>holiday</h6>
          </div>
          <div class="image-box" data-name="ironman">
              <img src="images/ironman2.jpg" alt="">
              <h6>ironman 2</h6>
          </div>
      </div>
    </div>
  </section>

  <script src="<?php echo site_url('assets/script/scriptMenu.js'); ?>"></script>

</body>
</html>
