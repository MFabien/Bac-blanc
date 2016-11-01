<?php include'index.php';?>

    <form action='' method='post'>
        <label>Titre:</label><br>
        <input type="text" name="titre"><br>
        <label>Lien:</label><br>
        <input type="text" name="lien"><br>
        <label>mot_de_passe(falcultatif):</label><br>
        <input type="password" name="mdp"><br>
        <input type="submit" name="addvideo" value="Ajouter">
    </form>



    <?php include 'config.php';

    if (isset($_POST['addvideo'])){
        $titre =  $_POST['titre'];
        $lien = $_POST['lien'];
        $mdp = $_POST['mdp'];


        $sql = "INSERT INTO video (titre,lien,mot_de_passe)VALUES('".$titre."','".$lien."','".$mdp."')";
        if($dbconnexion->query($sql)){
            echo "Video envoyer";

        }else{
            echo "echec";
        }





    }


    ?>

