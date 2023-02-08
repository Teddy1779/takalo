
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
        <a href="<?php echo site_url('Login/acceuil/'.$_SESSION['iduser']); ?>"><div class="logo_name">Takalo</div></a>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">      
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
    <div class="container" style="text-align: center;">
    <h1 class="text-center"> Page Administrateur</h4>
    <br>
    <br>
    <h4 class="text-center"> <x class="form-control"> Nombre d'utilisateur inscrit : <?php echo $all;?> </x> </h4>
    <br>
    <br>
  <span class="badge bg-success"> liste des echanges effectuer par utilisateur</span>
    <br>
    <br>
    <br>
    <div class="table-responsive" >
    <div class="text-center">
            <table class="table">
                <thead>
                    <tr class="table-dark">
                        <th>Nom de l'utilisateur</th>
                        <th>Nombre d'echange</th>
                    </tr>
                </thead>
                <tbody>
                  <?php for($i=0; $i < count($use); $i++) { 
                    if($use[$i]['mdp'] != "admin"){
                    ?>
                    <tr class="table-light">
                        <td><?php echo $use[$i]['nom']; ?></td>
                        <td><?php echo $isany[$i]; ?></td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </div>
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