<form action='traitementAjoutVideo.php' method='POST'>
        <label>Titre:</label><br>
        <input type="text" name="titre"><br>
        <label>Lien:</label><br>
        <input type="text" name="lien"><br>
        <label>mot_de_passe(falcultatif):</label><br>
        <input type="password" name="mdp"><br>
        <?php
        $sql= "SELECT * FROM categorie";
        $req = $dbconnexion->query($sql);


        // on envoie la requête
        while ($row = $req->fetch()) {
        ?>
        <label class="btn btn-danger">
         <input type="radio" name="categorie " value="<?= $row['id_categorie'];?>"> <?= $row['nom_categorie']; ?>
        </label>
            <?php
        }
        ?>
        <br>
        <br>
        <br>
        <input type="submit" name="addvideo" value="Ajouter">
    </form>
