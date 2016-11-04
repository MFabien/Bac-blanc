<?php
include('config.php');

if (!empty($_POST) && isset($_POST['titre']) && isset($_POST['lien']) && isset($_POST['mot_de_passe'])) {
    $titre = htmlspecialchars($_POST['titre']);
    $lien = htmlspecialchars($_POST['lien']);
    $mdp = htmlspecialchars($_POST['mdp']);

    foreach ($_POST['categorie'] as $valeur) {

        $requete ='INSERT INTO video( titre, lien, mot_de_passe, categorie_video ) VALUES (' . $titre . ', ' . $lien . ', ' . $mdp . ', ' . $valeur . ')';



    }

    //if(!$_POST['categorie']){
      //  echo 'Aucune checkbox n\'a été cochée';
    //}

 if($dbconnexion->query($requete)) {
    // header('Location: index.php?Videoajoutee');
    echo'oui';

}
else {
    //  header('Location: index.php?Videoerror');
    echo 'error';
    }
}









?>

