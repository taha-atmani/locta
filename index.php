<?php
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '');

if(isset($_GET['type']) AND $_GET['type'] == 'membre') {
    if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
       $confirme = (int) $_GET['confirme'];
       $req = $bdd->prepare('UPDATE membre SET confirme = 1 WHERE id = ?');
       $req->execute(array($confirme));
    }
    if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
       $supprime = (int) $_GET['supprime'];
       $req = $bdd->prepare('DELETE FROM membre WHERE id = ?');
       $req->execute(array($supprime));
    }
    else{
        echo "ok";
    }
}
$membre = $bdd->query('SELECT * FROM membre ORDER BY id DESC LIMIT 0,5');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta charset="utf-8">
<link rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="#">
<title>galerie</title>
</head>
<body>
    <ul>
    <?php while($m = $membre->fetch()) { ?>
      <li><?= $m['id'] ?> : <?= $m['pseudo'] ?><a href="index.php?type=membre&supprime=<?= $m['id'] ?>">Supprimer</a></li>
      <?php } ?>

    </ul>




</body>
</html>