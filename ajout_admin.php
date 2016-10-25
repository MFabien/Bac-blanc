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
        $firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : "";
        $lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : "";
        $email = (isset($_POST['email'])) ? $_POST['email'] : "";
        $password = (isset($_POST['password'])) ? $_POST['password'] : "";

        $sql = "INSERT INTO Admin VALUES(null,'".$firstname."','".$lastname."','".$email."','".$password."')";

        if($dbconnexion->query( $sql)){
            echo "ok";

        }else{
            echo "echec";
        }





    }

    ?>
    </form>

    </body>
    </html>