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
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <link href="<?php echo site_url('assets/style/headers.css');?>" rel="stylesheet">
   <script src="<?php echo site_url('assets/dist/js/bootstrap.bundle.min.js');?>"></script>
   <!-- ... fontawsom -->
   <link rel="stylesheet" href="<?php echo site_url('assets/fontawesome-5/css/all.css'); ?>">
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<!-- ..... -->
<link rel="stylesheet" href="<?php echo site_url('assets/css/styleAcceuil.css');?>">
<link rel="stylesheet" href="<?php echo site_url('assets/css/styleMenu.css'); ?>" />
<script src="<?php echo site_url('assets/script/scriptAcceuil.js'); ?>"></script>

<!-- ..... -->

<body>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <a style="text-decoration: none;" href="<?php echo site_url('Login/acceuil/'.$_SESSION['iduser']); ?>"><div class="logo_name">Takalo</div></>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="<?php echo site_url('Login/autre/'.$_SESSION['iduser']); ?>">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Voir autre objet</span>
        </a>
        <span class="tooltip">Voir autre objet</span>
      </li>
      <li>
      <a href="<?php echo site_url('Login/accept'); ?>">
         <i class='bx bx-user' ></i>
         <span class="links_name">Demande d'objet</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="<?php echo site_url('Login/demandeobjet'); ?>">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Mes demandes</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="<?php echo site_url('Login/historique'); ?>">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Historique</span>
       </a>
       <span class="tooltip">Historique</span>
     </li>
     <li>
       <a href="<?php echo site_url('Login/echangeEff'); ?>">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Echange</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li>
       <a href="<?php echo site_url('Login/logout'); ?>">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Deconnexion</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
    </ul>
  </div>
  <!-- Manoratra ao @droite -->
  <section class="home-section">
  <div class="search-box" style="text-align: center;">
          <!-- <i class="bx bx-search"></i> -->
          <h1 class="h2">Voici vos demandes d'objet</h1>
      </div>
  <div class="container">
    <?php for($i=0; $i < count($dmd); $i++) { 
        if($dmd[$i]['confirmation'] == "false"){
         ?>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm"> 
                    <div class="col-md-1" style="text-align:center ;">
                        <img src="<?php echo site_url('assets/img/'.$dmd[$i]['photo'].'');?>" alt="" style="    width: 68px;border-radius: 87px;height: 62px;">
                    </div>
                    <div class="col-md-3" 1style="text-align:center ;">
                        <p><?php echo $dmd[$i]['nom'];?></p>
                    </div>
                    <div class="col-md-2" style="text-align:center ;">
                        <p><?php echo $dmd[$i]['date_demande'];?></p>
                    </div>
                    <div class="col-md-2" style="text-align:center ;">
                        <a href="<?php echo site_url('Login/deletedemandes/'.$dmd[$i]['iddemande'].'');?>" class="btn btn-danger" style="height: 39px;width: 91px; margin-left: 10px;">Supprimer</a>
                    </div>
            </li>
        </ul>
       <?php }} ?>
    </div>
 <!-- footer    -->
    <footer class="py-3 my-4" style="background-color: white;">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ETU001754 ANDRIAMIHARISOA Mananjara </a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ETU001762 ANDRIANASINORO Hasina </a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ETU001779 IHARIMIMA Teddy</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2023 Company, Inc</p>
    </footer>
<!-- footer    -->
  </section>

  <script src="<?php echo site_url('assets/script/scriptMenu.js'); ?>"></script>

</body>
</html>