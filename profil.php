<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta charset="utf-8">
<link rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="profil.css">
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





<script src="profil.js"></script>
<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare("SELECT * FROM membre WHERE id = ?");
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();


?>

<div class="all">
        <div id="menu">
            <div class="burgermenu" >
                <a href="http://localhost/locta/accueilconnect.php">Accueil</a>
                <p>________</p>
                <a href="profil.php?id=<?php echo $_SESSION['id']; ?>">Mon compte<?php echo $_SESSION['pseudo']; ?></a>
                <p>________</p>
                <a href="parcourir2connect.php?id=<?php echo $_SESSION['id']; ?>">Parcourir</a>
                <p>________</p>
                <a href="#">Mes réservations</a>
                <p>________</p>
                <a href="#">Contact</a>
                <p>___________</p>
                <a href="#">Déconnexion</a>
            </div>
        </div>
    <div class="box" align="center">
        <h2>Profil de <?php echo $userinfo['pseudo'] ?></h2>
        <br><br>
        <p>Mail = <?php echo $userinfo['mail'] ?></p>
        <br>

        <?php
        if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
        {
        ?>

        <div class="selection" >
            <a href="reservations.php"> Mes réservations</a>
            <a href="deconnexion.php"> Se déconnecter</a>
            <a href="accueilconnect.php">retour sur le site</a>
        </div>
        <?php
        
        }
        
        ?>

        
    </div>
</div>


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
<?php
}

?>