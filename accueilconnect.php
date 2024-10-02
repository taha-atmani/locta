<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta charset="utf-8">
<link rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="accueilconnect.css">
<title>LOCTA</title>
</head>
<body>
<header>
    <div class="nav1">
        <a href="accueilconnect.php">Accueil</a>
        <a href="parcourir2connect.php">Parcourir</a>
    </div>
    <a href="accueilconnect.php" id="boutonlogo"><img src="ressource/LOCATlogo.png" id="logo"></a>
    <div class="nav1">
        <a href="#">Contact</a>
        <a onclick="menu()" href="#"><img src="ressource/burgernoir.png" class="logo1"></a>
    </div>
    

</header>

<script src="accueilconnect.js"></script>

<section class="sectb">
    <div id="menu">
        <div id="burgermenu" >
            <a href="#">Accueil</a>
            <p>________</p>
            <a href="profil.php?id=<?php echo $_SESSION['id']; ?>">Mon compte<?php echo $_SESSION['pseudo']; ?></a>
            <p>________</p>
            <a href="parcourir2connect.php">Parcourir</a>
            <p>________</p>
            <a href="reservations.php">Mes réservations</a>
            <p>________</p>
            <a href="#">Contact</a>
            <p>___________</p>
            <a href="deconnexion.php">Déconnexion</a>
        </div>
    </div>
    <div id="ecrit">
        <h1 id="text1">DE NOUVEAUX <br> MODELES DISPONIBLES !</h1>
    </div>
    <a href="parcourir2connect.php" id="boutton"><h2>RESERVER!</h2></a>
</section>




<section class="sect2">
    <ul class="gallery">
        
        <li><a class="cadre" href="art.php?idvehicule=10"><img src="ressource/22bmwm31.jpg" alt="" class="image"><span>Nouveau véhicule</span></a></li>
        <li><a class="cadre" href="art.php?idvehicule=2"><img src="ressource/22urus.jpg" alt="" class="image"><span>Le plus populaire</span></a></li>
        <li><a class="cadre" href="art.php?idvehicule=4"><img src="ressource/22audia7devant1.jpg" alt="" class="image"><span id="centrer">Le moins cher</span></a></li>
    </ul>
</section>
<section class="sect3">
    <h3>Sur tous vos appareils!</h3>
    <img src="ressource/ipadiphone.png">
    <h4>Partout, quand vous voulez</h4>
    <p>Un déplacement imprévu, un voyage ou autre: choississez un véhicule <br>de votre choix, réservez en quelques minutes et le tour est joué</p>
</section>




<footer class="footer">            
    <ul class="social">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-snapchat"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
    </ul>

    <ul class="list">
        <li><a href="burnaboymenu.html">Accueil</a></li>
        <li><a href="#">Parcourir</a></li>
        <li><a href="burnaboydisco.html">Contact</a></li>
    </ul>
    <p class="copyright">Locta @ 2023</p>

</footer>



</body>
</html>