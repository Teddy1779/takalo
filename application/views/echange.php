<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo site_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo site_url('assets/dist/js/bootstrap.bundle.min.js'); ?> "></script>
    <title>Echange</title>
</head>

<style>
    #sary{
        height: 111px;
        width: 115px;
        border-radius: 66px;
        object-fit: cover;
        
    };
</style>

<body><br>
    <div class="container" style="width: 365px;border: outset;border-radius: 15px;">
        <h3 class="fs-2" style="text-align: center;">Echange</h3>
        <br>
        <div>
            <div class="image" style="text-align: center;">
                <img src="<?php echo site_url('assets/img/'.$change[0]['photo'].'') ?>" alt="" id="sary">
                <p class=""><?php echo $change[0]['nom'];?></p>
            </div>
            <form action="<?php echo site_url('Login/dmdobj/'.$change[0]['iduser'].'/'.$change[0]['idobjet'].'') ?>" method="post">
                <label class="form-label" style="font-size: small;">Description : </label>
                <p class="form-control"><?php echo $change[0]['description'];?></p><br>
                <label class="form-label" style="font-size: small;">Echanger avec : </label>
                <select name="outils" id="" class="form-control">
                    <?php
                        for($i=0;$i<count($outils);$i++) { ?>
                            <option value="<?php echo $outils[$i]['idobjet'];?>"><?php echo $outils[$i]['nom'];?><?php echo $outils[$i]['idobjet'];?></option>
                    <?php } ?>
                    <option value="">Outils</option>
                </select><br>
                <a href="<?php echo site_url('Login/autre/'.$_SESSION['iduser'].'') ?>" class="btn btn-secondary" style="background-color: crimson;">Annuler</a>
                <input type="submit" value="Demander l'echange" class="btn btn-primary" style="background-color: #11101d;"> 
            </form>
        </div><br>
    </div>
    
</body>
</html>