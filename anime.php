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
     <?php $mysqli = new mysqli('localhost', 'root', '1234', 'anime');
     $mysqli -> set_charset("utf8");
     $sql = "SELECT * FROM `listeanime` ORDER BY id ASC";
     $result = $mysqli->query($sql);

     $animes = [];
     $ordreDesAnimes = 0;
     if ($result->num_rows > 0)
     {
         while($row = $result->fetch_assoc())
         {
             $orderDesAnimes++;
             $animes[$orderDesAnimes]['titre'] = $row['titre'];
             $animes[$orderDesAnimes]['image'] = $row['image'];
             $animes[$orderDesAnimes]['description'] = $row['description'];
         }
     }
     ?>

<div class="tout-les-animes" id="tout-les-animes">
     <?php foreach($animes as $anime): ?>
        <div class="style-des-animes">
            <h3><?= $anime['titre'] ?></h3>
            <img class="toutes-les-images" src="<?= $anime['image']?>">
            <p><?= $anime['description'] ?></p>
        </div>
     <?php endforeach; ?>
</div>



     <div class="header" id="header">
             <img class="demon" src="assets/2.jpg" alt="demon slayer">
             <div class="container2">
             <h2>A la une </br> Bientot disponible en VOSTFR</h2>
             </div>
     </div>




    <?php include("page/footer.php");?>


        <script src="js/jquery.min.js" type="text/javascript" ></script>
        <script src="js/bootstrap.js" type="text/javascript" ></script>
        <script src="js/script.js" type="text/javascript" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="js/app.js"></script>
</body>
</html>