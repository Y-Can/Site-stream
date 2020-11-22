<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animés</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Kanit&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>    
     <?php include("page/navbar.php");?>

     <div class="header" id="header">
             <img class="demon" src="assets/2.jpg" alt="demon slayer">
             <div class="container2">
             <h2>A la une </br> Bientot disponible en VOSTFR</h2>
             </div>
     </div>

<?php

     $bdd = new PDO('mysql:host=127.0.0.1;dbname=anime;charset=utf8','root','1234');

     $articles = $bdd->query('SELECT titre,description,image FROM listeanime ORDER BY id DESC');
     if(isset($_GET['q']) AND !empty($_GET['q'])) {
        $q = htmlspecialchars($_GET['q']);
        $articles = $bdd->query('SELECT titre,description,image FROM listeanime WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
        if($articles->rowCount() == 0) {
           $articles = $bdd->query('SELECT titre,description,image FROM listeanime WHERE CONCAT(titre, image, description) LIKE "%'.$q.'%" ORDER BY id DESC');
        }
     }
     ?>


        <?php if($articles->rowCount() > 0) {?>
            <div class="tout-les-animes" id="tout-les-animes">
        <?php while($a = $articles->fetch()) { ?>
                <div class="style-des-animes">
                 <h3><?=$a['titre']?></h3>
                 <a href=""><img class="toutes-les-images" src="<?=$a['image']?>"></a>
                 <p><?=$a['description']?></p>
             </div>
             <?php } ?>
        </div>



        
<?php } else { ?>
    <h1> Aucun résultat pour : "<?= $q ?>"</h3>
<?php } ?>


    <?php include("page/footer.php");?>


        <script src="js/jquery.min.js" type="text/javascript" ></script>
        <script src="js/script.js" type="text/javascript" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="js/app.js"></script>
</body>
</html>