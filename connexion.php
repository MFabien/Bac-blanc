<?php include 'index.php'?>

<form action=""method="post" class="col-md-offset-10">
    <label>email</label><br>
    <input type="email"name="email"><br>
    <label>mot de passe</label><br>
    <input type="password"name="mot_de_passe"><br>
    <input type="submit"name="login" value="connexion">

</form>


<?php include 'config.php';

if(isset($_POST)&& !empty($_POST['email']) && !empty($_POST['mot_de_passe'])){
    extract($_POST);
    $login = $_POST['email'];
    $pass = $_POST['mot_de_passe'];
}
if (isset($_POST['email'])){
    $pemail = (isset($_POST['email'])) ? $_POST['email'] : "";
    $ppassword = (isset($_POST['mot_de_passe'])) ? $_POST['mot_de_passe'] : "";

    $sql = "SELECT prenom, nom, email, mot_de_passe FROM utilisateur";

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

       header('location: index.php');
    }

    else{
         echo 'email ou mot de passe incorect';
    }

}






?>
