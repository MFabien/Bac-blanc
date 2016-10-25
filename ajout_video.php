<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Bac blanc</title>
    </head>

    <body>

    <?php
    session_start();
    ?>
    <a href="index.php">Accueil</a>

    <form action='' method='post'>
        <label>Lien:</label><br>
        <input type="text" name="lien"><br>
        <label>mot_de_passe(falcultatif):</label><br>
        <input type="password" name="mdp"><br>
        <input type="submit" name="addvideo" value="Ajouter">
    </form>



    <?php include 'config.php';

    if (isset($_POST['addvideo'])){
        $lien = (isset($_POST['lien'])) ? $_POST['lien'] : "";
        $mdp = (isset($_POST['mdp'])) ? $_POST['mdp'] : "";

        $sql = "INSERT INTO video VALUES(null,'".$lien."','".$mdp."')";

        if($dbconnexion->query($sql)){
            echo "ok";

        }else{
            echo "echec";
        }





    }

    ?>
    </form>

    </body>
    </html>