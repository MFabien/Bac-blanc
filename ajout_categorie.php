<?php include 'index.php';?>

    <div class="inscription">
    <form action='' method='post'>
        <label>Nom:</label><br>
        <input type="text" name="nom"><br>
        <input type="submit" name="addCategorie" value="Crée">
    </form>
</div>

<?php include 'config.php';

if (isset($_POST['addCategorie'])){
    $nom =  $_POST['nom'];

    $sql = "INSERT INTO categorie(nom)VALUES('".$nom."')";
    if($dbconnexion->query($sql)){
        echo "Catégorie crée";

    }

    else{
        echo "echec";
    }

}


?>
