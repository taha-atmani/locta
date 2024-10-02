<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta charset="utf-8">
<link rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="inscription.css">
<title>galerie</title>
</head>
<body>
<script src="inscription.js"></script>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');
if(isset($_POST['forminscription']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);

    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
    {
        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255)
        {
            if($mail == $mail2 )
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {

                    $reqmail = $bdd->prepare("SELECT * FROM membre WHERE mail = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0)
                    {
                        if($mdp == $mdp2)
                        {
                            $insertmbr = $bdd->prepare("INSERT INTO membre(pseudo, mail, motdepasse) VALUES(? ,? ,?) ");
                            $insertmbr-> execute(array($pseudo, $mail, $mdp));
                            $erreur = "Votre compte a été créé ! <a href=\"connexion.php\">Me connecter</a>";
                        }
                        else
                        {
                            $erreur = "Vos mots de passes ne correspondent pas !";
                        }
                    }
                    else
                    {
                        $erreur = "L'adresse mail est déjà utilisée !";
                    }


                }
                else
                {
                    $erreur = "Votre adresse mail n'est pas valide !";
                }
            }
            else
            {
               $erreur = "Vos adresses mail ne correspondent pas !"; 
            }
        }
        else
        {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }

        
    }
    else
    {
        $erreur = "Tous les champs doivent être complétés !";
    }
}









?>


    <div align="center">
        
        <br><br>
        <form method="post" action="">
            <table>
            <h2>Inscription</h2>
                <tr>
                    <td align="right">
                        <label for="pseudo" >Pseudo :</label>
                    </td>
                    <td>
                        <input id="pseudo" type="text" placeholder="Votre pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; }?>" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mail" >Mail :</label>
                    </td>
                    <td>
                        <input id="mail" type="email" placeholder="Votre mail" name="mail" value="<?php if(isset($mail)) { echo $mail; }?>" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mail2" >Confirmation du mail :</label>
                    </td>
                    <td>
                        <input id="mail2" type="email" placeholder="confirmez votre mail" name="mail2" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp" >Mot de passe :</label>
                    </td>
                    <td>
                        <input id="mdp" type="password" placeholder="Votre mot de passe" name="mdp" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp2" >Confirmation du mot de passe :</label>
                    </td>
                    <td>
                        <input id="mdp2" type="password" placeholder="Confirmez votre mdp" name="mdp2" />
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" name="forminscription" value="Je m'inscris" />
        </form>
        <?php
        if(isset($erreur))
        {
            echo $erreur;
        }
        ?>
    </div>

</body>
</html>