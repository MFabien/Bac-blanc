<?php
session_start();
$LOGGED = $_SESSION['logged'];
?>
<!DOCTYPE html>
<html>
<head>

    <title>Bac Blanc</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.0/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav">

                <?php

                if ($_SESSION['logged'])
                {
                    $LOGGED = $_SESSION['logged'];
                }
                else
                {
                    $_SESSION['logged']= False;
                    $LOGGED = $_SESSION['logged'];
                }

                if($LOGGED)
                {
                    echo
                        '  
                            <li><a href="ajout_video.php">Ajout vidéo</a></li>
                            <li><a href="ajout_categorie.php">Ajout categorie</a></li>
                            '.$_SESSION['nom'].' '.$_SESSION['prenom'].'
                            <a href="deconnexion.php"><button>Deconnexion</button></a>';
                }
                else
                {
                    ?>

                    <li><a href='ajout_admin.php'>Inscription</a></li>
                    <li><a href='connexion.php'>Connexion</a></li>

                    <?php
                }


                ?>
            </ul></ul>
    </div>
</nav>

</ul>
</div>
</nav>
</body>

