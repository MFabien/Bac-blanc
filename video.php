<?php include'config.php';
        include 'index.php';

        $req = $dbconnexion->query("SELECT * FROM video");



  while ($row = $req->fetch()){
      ?>
<iframe width="360" height="215" src="<?php echo $row['lien'];?>" frameborder="0" allowfullscreen></iframe><br>

   <?php echo $row['Titre'];?><br><br>


 <?php }
?>