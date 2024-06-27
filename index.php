<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Globe</title>
    <link rel="stylesheet" href="core/style/style.css">
    <link rel="shotcut icon" href="assets/favicon.jpg">
    <script src="core/interaction/script.js"> </script>
    <!-- https://www.govoyages.com/   Inspi -->
</head>

<body>
    <header>
        <?php require_once(__DIR__ . '/include/header.php'); ?>
    </header>


    <div class="slider">
      <div class="slides">

        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">


        <div class="slide first">
          <img src="assets/1.png" alt="">
        </div>
        <div class="slide">
          <img src="assets/2.png" alt="">
        </div>
        <div class="slide">
          <img src="assets/3.png" alt="">
        </div>
        <div class="slide">
          <img src="assets/4.png" alt="">
        </div>

        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
      </div>
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
    </div>


<div class="container">

   <h1 class="heading">Nos meilleurs offres</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <picture>
               <source srcset="assets/images/img-1.jpg" media="(min-width: 800px)">
               <source srcset="assets/images/img-1.jpg" media="(max-width: 799px)">
               <img src="assets/images/img-1.jpg" alt="image phuket">
            </picture>
         </div>
         <div class="content">
            <h3>Phuket, Thailande</h3>
            <p>Découvrez les plages immaculées de Phuket et laissez-vous séduire !</p>
            <a href="#" class="btn">Réserver</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>Explore Globe</span>
               <span> <i class="fas fa-user"></i>★★★★★</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bangkok, Thailande</h3>
            <p>Explorez Bangkok, la ville des temples et des gratte-ciels !</p>
            <a href="#" class="btn">Réserver</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>Eplore Globe</span>
               <span> <i class="fas fa-user"></i>★★★★★</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bali, Indonésie</h3>
            <p>Découvrez Bali, où chaque lever de soleil est une nouvelle aventure !</p>
            <a href="#" class="btn">Réserver</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>Eplore Globe</span>
               <span> <i class="fas fa-user"></i>★★★★</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Moscou</h3>
            <p>Découvrez la majesté et l'histoire de la capitale russe !</p>
            <a href="#" class="btn">Réserver</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>Eplore Globe</span>
               <span> <i class="fas fa-user"></i>★★★★</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Paris</h3>
            <p>Découvrez une aventure élégante au cœur de la capitale française !</p>
            <a href="paris.php" class="btn">Réserver</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>Eplore Globe</span>
               <span> <i class="fas fa-user"></i>★★★★</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Rio de Janeiro</h3>
            <p>Découvrez Rio : plages de rêve, samba enflammée et carnaval coloré !</p>
            <a href="#" class="btn">Réserver</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>Eplore Globe</span>
               <span> <i class="fas fa-user"></i>★★★★★</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Los Angeles</h3>
            <p>Découvrez LA : plages ensoleillées, glamour &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp hollywoodien et créativité sans fin ! &nbsp &nbsp &nbsp &nbsp &nbsp</p>
            <a href="#" class="btn">Réserver</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>Eplore Globe</span>
               <span> <i class="fas fa-user"></i>★★★★★</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/images/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Cancún</h3>
            <p>L'ultime destination pour se détendre, se divertir et se ressourcer sous le soleil mexicain !</p>
            <a href="#" class="btn">Réserver</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>Eplore Globe</span>
               <span> <i class="fas fa-user"></i>★★★★★</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/images/img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Fort-de-France</h3>
            <p>Découvrez le charme authentique de Fort-de-France, entre marché coloré et architecture historique </p>
            <a href="#" class="btn">Réserver</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>Eplore Globe</span>
               <span> <i class="fas fa-user"></i>★★★★★</span>
            </div>
         </div>
      </div>

   </div>

   <div id="load-more"> Voir plus </div>

</div>

<script>

let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.container .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 3;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}

</script>
<section class="pourquoinous">
   <div class="container-nous">

      <h1 class="heading-nous">Pourquoi utilser Explore Globe ?</h1>

      <div class="box-container-nous">

         <div class="box-nous">
               <img src="assets/qr-code.png" alt="qrcode" class="img-nous">
            <div class="content-nous">
               <h3 class="title-nous">L'appli fait l'enregistrement pour vous</h3>
               <p class="descri-nous">Demandez vos cartes d'embarquement à l'avance, nous vous les enverrons par e-mail. Rien de plus simple !</p>
            </div>
         </div>

         <div class="box-nous">
               <img src="assets/active.png" alt="notif" class="img-nous">
            <div class="content-nous">
               <h3 class="title-nous">Ne manquez aucune notification de vol</h3>
               <p class="descri-nous">Recevez gratuitement et en temps réel des mises à jour sur les horaires, la porte d'embarquement, le tapis bagages, etc.</p>
            </div>
         </div>

         <div class="box-nous">
               <img src="assets/adjustments.png" alt="modification" class="img-nous">
            <div class="content-nous">
               <h3 class="title-nous">Plus d'options de voyage que n'importe qui</h3>
               <p class="descri-nous">Le site compare plus de 2 000 000 hébergements, plus de 900 agences de location de voitures et plus de 600 compagnies aériennes.</p>
            </div>
         </div>
      </div>
   </div>
</section>

<footer>
   <?php require_once(__DIR__ . '/include/footer.php'); ?>
</footer>



</body>
</html>