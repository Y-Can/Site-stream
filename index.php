<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zone Anime</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Kanit&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    
<?php include("page/navbar.php");?>


     <div class="titre">
        <H1>Nos Animés les plus populaire</H1>
   </div>



     <div class="populaire">

        <div class="image active" style="background: url(assets/1.jpg) center/cover;">
          <div class="text-container">
            <div class="text">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          </div>
        </div>
  
        <div class="image" style="background: url(assets/2.jpg) center/cover;">
          <div class="text-container">
            <div class="text">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          </div>
        </div>
  
        <div class="image" style="background: url(assets/3.jpg) center/cover;">
          <div class="text-container">
            <div class="text">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          </div>
        </div>
  
        <div class="image" style="background: url(assets/4.jpg) center/cover;">
          <div class="text-container">
            <div class="text">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          </div>
        </div>
  
        <div class="image" style="background: url(assets/5.jpg) center/cover;">
          <div class="text-container">
            <div class="text">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>

     <div class="derniersEpisodes" id="vueDerniersEpisodes">
    <p>{{message}}</p>
    <div class="episodes" @mouseover="afficherFleche = true" @mouseleave="afficherFleche = false">

      <transition :name="directionSlide"> 
      <div class="img" v-if="!imgSlide"> <img :src="imageEpisode2"> </div>
      </transition>
      <transition :name="directionSlide"> 
        <div class="img" v-if="imgSlide"> <img :src="imageEpisode"> </div>
      </transition>

    
      <div class="infos">
        <transition :name="directionSlide"> 
          <div class="titreEpisode" v-if="imgSlide" >{{titreEpisode}}</div>
        </transition>
        <transition :name="directionSlide">
          <div class="titreEpisode" v-if="!imgSlide" >{{titreEpisode2}}</div>
        </transition> 
        
       
        <div class="suivPrev">   
        <transition name="fonduFleche">              
          <div class="precedent" v-if="afficherFleche" @click="episodePrecedent"><i class="fas fa-caret-left"></i></div> 
        </transition>
        <transition name="fonduFleche">   
          <div class="suivant" v-if="afficherFleche" @click="episodeSuivant"><i class="fas fa-caret-right"></i></div> 
        </transition>
        </div>
        
        <div class="bouton-regarder"> <button>REGARDER</button></div>       
      </div>    
    </div>
  </div>


     
  
  <?php include("page/footer.php"); ?>
  
    
  
  
      
    <script src="js/jquery.min.js" type="text/javascript" ></script>
    <script src="js/bootstrap.js" type="text/javascript" ></script>
    <script src="js/script.js" type="text/javascript" ></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	 <script src="js/app.js"></script>
    
</body>
</html>