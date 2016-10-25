<?php
session_start();
$_SESSION['logged'] = false;
$LOGGED = $_SESSION['logged'];

?>
<!DOCTYPE html>
<html>
<head>

    <title>Bac Blanc</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css" />

</head>
<body>

<div class="container">



    <div class="row">

        <form action=""method="post" class="col-md-offset-10">
            <label>email</label><br>
            <input type="email"name="email"><br>
            <label>mot de passe</label><br>
            <input type="password"name="mot_de_passe"><br>
            <input type="submit"name="login" value="connexion">
            <a href="creation.php">Crée un compte</a>
        </form>
        <nav>
            <ul>
                <li><a href="ajout_video.php">Mais vidéo</a></li>
            </ul>
        </nav>

    </div>
</div>
<?php include 'config.php';

if(isset($_POST)&& !empty($_POST['login']) && !empty($_POST['pass'])){
    extract($_POST);
    $login = $_POST['login'];
    $pass = $_POST['pass'];
}
if (isset($_POST['login'])){
    $pemail = (isset($_POST['email'])) ? $_POST['email'] : "";
    $ppassword = (isset($_POST['mot_de_passe'])) ? $_POST['mot_de_passe'] : "";

    $sql = "SELECT prenom, nom, email, mot_de_passe FROM Admin";

    $result = $dbconnexion->query($sql);

    if($result->rowCount($result)>0){
        while($row = $result->fetch()){

            if(($row['email'] === $pemail) && ($row['mot_de_passe']===$ppassword)){
                $_SESSION['email'] = $row['email'];
                $_SESSION['mot_de_passe'] = $row['mot_de_passe'];
                $_SESSION['prenom'] = $row['prenom'];
                $_SESSION['nom'] = $row['nom'];
                $_SESSION['logged'] = true;
                $LOGGED = $_SESSION['logged'];


            }
        }


    }

}

if($LOGGED){

    echo $_SESSION['nom'].' '.$_SESSION['prenom'].'<input type="submit" name="logout" value="deconexion">';
}

?>


</body>
</html>
