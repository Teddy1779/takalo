
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>resultat</title>
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
      <a style="text-decoration: none;" href="<?php echo site_url('Login/acceuil/'.$_SESSION['iduser']); ?>"><div class="logo_name">Takalo</div></a>
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

    <div class="container">
      <div class="search-box" style="text-align: center;">
          <h1 class="h2">Resultat du recherche</h1>
      </div><br>

      <div class="images">
          <!-- <form action="<?php echo site_url('Login/recherche'); ?>" class="d-flex" role="search">
                <input class="form-control" type="search" name="solotena" placeholder="Search" aria-label="Search">
                <select name="categorie" id="" class="form-control">
                  <option hidden>Categorie</option>
                  <option value="">Lolo</option>
                </select>
                <input class="btn btn-outline-dark" type="submit" value="Search">
          </form> -->
      </div><br>
       
      <div class="images">
        <?php for ($i=0; $i < count($resultat); $i++) { ?>
            <div class="image-box" data-name="spiderman">
            <img src="<?php echo site_url('assets/img/'.$resultat[$i]['photo'].'') ?> " alt="">
            <h6></h6>
             <h6><?php echo $resultat[$i]['nom']; ?>_<?php echo $resultat[$i]['prix']; ?>Ar
             <a href="<?php echo site_url('Login/echange/'.$resultat[$i]['idobjet'].'');?>"><button class="btn btn-dark">Echanger</button></a>
            </h6> 
        </div>
      <?php  } ?>
      </div>
    </div>
    <footer class="py-3 my-4" style="background-color: white;">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ETU001754 ANDRIAMIHARISOA Mananjara </a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ETU001762 ANDRIANASINORO Hasina </a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ETU001779 IHARIMIMA Teddy</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2023 Company, Inc</p>
    </footer>
  </section>

  <script src="<?php echo site_url('assets/script/scriptMenu.js'); ?>"></script>

</body>
</html>