<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta charset="utf-8">
<link rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="art.css">
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




<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if(isset($_GET['idvehicule']) AND $_GET['idvehicule'] > 0)
{
    $getid = intval($_GET['idvehicule']);
    $requser = $bdd->prepare("SELECT * FROM vehicule WHERE idvehicule = ?");
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();


?>

<script src="art.js"></script>
<section class="sect2">
<div id="menu">
    <div class="burgermenu" >
            <a href="accueilconnect.php">Accueil</a>
            <p>________</p>
            <a href="profil.php?id=<?php echo $_SESSION['id']; ?>">Mon compte<?php echo $_SESSION['pseudo']; ?></a>
            <p>________</p>
            <a href="parcourir2connect.php">Parcourir</a>
            <p>________</p>
            <a href="#">Mes réservations</a>
            <p>________</p>
            <a href="#">Contact</a>
            <p>___________</p>
            <a href="deconnexion.php">Déconnexion</a>
        </div>
        </div>

        <div class="boxwhite">
    <div class="box" align="center">
        <img src="ressource/<?php echo $userinfo['idvehicule'] ?>.png" alt="">
        <h2><?php echo $userinfo['nom'] ?></h2>
        <div class="info">
            <br><br>
            <span><?php echo $userinfo['prix'] ?>€</span>
            <br>
            <p>Disponible depuis le :<br><?php echo $userinfo['datedispo'] ?></p>
            <form method="post" action="">
                <input type="hidden" name="idvehicule" value="<?php echo $userinfo['idvehicule'] ?>" />
                <input type="date" name="datedebut" placeholder="Date de début" />
                <input type="date" name="datefin" placeholder="Date de fin" />
                <input type="submit" name="formconnexion" value="Se connecter" />
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['formconnexion'])) {
    // Récupérer les valeurs soumises
    $idvehicule = $_POST['idvehicule'];
    $datedebut = $_POST['datedebut'];
    $datefin = $_POST['datefin'];

    // Préparer la requête d'insertion
    $insertQuery = $bdd->prepare("INSERT INTO reservation (id, idvehicule, datedebut, datefin) VALUES (?, ?, ?, ?)");

    // Exécuter la requête en passant les valeurs soumises
    $insertQuery->execute(array($_SESSION['id'], $idvehicule, $datedebut, $datefin));
}
?>


    </div>
</div>


</section>
<section class="sect3">
    <div class="boxblack">
        <img id="interior" src="ressource/<?php echo $userinfo['idvehicule'] ?><?php echo $userinfo['idvehicule'] ?><?php echo $userinfo['idvehicule'] ?>.png" alt="">
        <img id="brand" src="ressource/<?php echo $userinfo['idvehicule'] ?><?php echo $userinfo['idvehicule'] ?><?php echo $userinfo['idvehicule'] ?><?php echo $userinfo['idvehicule'] ?>.png" alt="">
        <p><?php echo $userinfo['image'] ?></p>

    </div>
    
    





</section>
</body>
</html>
<?php
}

?>

