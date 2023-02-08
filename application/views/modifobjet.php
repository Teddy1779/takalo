
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo site_url('assets/dist/css/bootstrap.min.css'); ?> " rel="stylesheet">
    <script src="<?php echo site_url('assets/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <title>Modification</title>
</head>
<body><br>
    <div class="container" style="width: 365px;border: outset;border-radius: 15px;">
        <h3 class="fs-2" style="text-align: center;">Modification d'objet</h3>
        <br>
        <div>
            <form action="<?php echo site_url('Login/modify/'.$information[0]['idobjet'].''); ?>" method="post">
                <label class="form-label" style="font-size: small;">Nom : </label>
                <input type="text" class="form-control" name="nom" id=""  value="<?php echo $information[0]['nom']; ?>"><br>
                <label class="form-label" style="font-size: small;">Prix : </label>
                <input type="text" class="form-control" name="prix" id="" value="<?php echo $information[0]['prix']; ?>"><br>
                <label class="form-label" style="font-size: small;">Categorie : </label>
                <select name="categorie" id="" class="form-control">
                    <?php for ($i=0; $i < count($categories); $i++) { ?>
                        <option value="<?php echo $categories[$i]['idcategorie']; ?>" <?php if($categories[$i]['idcategorie'] == $information[0]['idcategorie']){echo "selected";} ?>><?php echo $categories[$i]['nom']; ?></option>
                   <?php } ?>
                </select><br>
                <a href="<?php echo site_url('Login/acceuil/'.$_SESSION['iduser']); ?>" class="btn btn-secondary" style="background-color: crimson;">Annuler</a>
                <input type="submit" value="Valider" class="btn btn-primary" style="background-color: #11101d;"> 
            </form>
        </div><br>
    </div>
</body>
</html>