<?php include'index.php'?>
<form action='' method='post'>
        <label>votre prénom:</label><br>
        <input type="text" name="prenom"><br>
        <label>votre nom:</label><br>
        <input type="text" name="nom"><br>
        <label>votre email:</label><br>
        <input type="email" name="email"><br>
        <label>votre mot de passe:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="addUser" value="S'inscrire">
    </form>



    <?php include 'config.php';

    if (isset($_POST['addUser'])){
        $prenom = (isset($_POST['prenom'])) ? $_POST['prenom'] : "";
        $nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
        $email = (isset($_POST['email'])) ? $_POST['email'] : "";
        $password = (isset($_POST['password'])) ? $_POST['password'] : "";

        $sql = "INSERT INTO Admin VALUES(null,'".$prenom."','".$nom."','".$email."','".$password."')";

        if($dbconnexion->query($sql)){
            echo "compte crée";

        }else{
            echo "echec";
        }





    }

    ?>
    </form>

