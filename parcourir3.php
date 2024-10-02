<?php
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');
$vehicule = $bdd->query('SELECT * FROM vehicule');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta charset="utf-8">
<link rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="parcourir3.css">
<title>LOCTA</title>
</head>
<body>
    <header>
        <div class="nav1">
            <a href="locta1.php">Accueil</a>
            <a href="parcourir2.php">Parcourir</a>
        </div>
        <a href="locta1.php" id="boutonlogo"><img src="ressource/LOCATlogo.png" alt="" id="logo"></a>
        <div class="nav1">
            <a href="#">Contact</a>
            <a href="connexion.php">Connexion</a>
        </div>
    </header>
    <script src="parcourir3.js"></script>

<section class="section1">
    <h6>Votre voiture n'attend<br> plus que vous !</h6>



</section>


<section class="section2">
<?php
$counter = 0;
while ($m = $vehicule->fetch()) {
    $counter++;
    if ($counter < 9) {
        continue; // Ignorer les 4 premiers éléments
    }
    if ($counter > 12) {
        break; // Sortir après le 8ème élément
    }
?>
    <div class="products">
        <div class="product">
            <a href="art.php?idvehicule=<?= $m['idvehicule'] ?>"><img src="ressource/<?= $m['idvehicule'] ?>.png" alt="u"></a>
            <h2><?= $m['nom'] ?></h2>
            <p class="price"><?= $m['prix'] ?>$</p>
            <p class="description"><?= $m['description'] ?></p>
        </div>
    </div>
<?php
}
?>


<a href="parcourir2.php" >page precedente</a>

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