<?php
session_start();
$LOGGED = $_SESSION['logged'];
?>
<!DOCTYPE html>
<html>
<head>

    <title>Bac Blanc</title>

    <link href="header.css" rel="stylesheet">


</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="video.php">Vidéo</a></li>
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
                            <span style="color:#7FFFD4" >
                            '.$_SESSION['nom'].' '.$_SESSION['prenom'].'
                            <a href="deconnexion.php"><button>Deconnexion</button></a></span>';
                }
                else
                {
                    ?>

                    <li><a href='ajout_admin.php'>Inscription</a></li>
                    <li><a href='connexion.php'>Connexion</a></li>

                    <?php
                }


                ?>
            </ul>
        </ul>
    </div>
</nav>
</div>
</div>


</div>
</nav>
</body>

