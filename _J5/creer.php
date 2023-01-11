<?php
echo 'test';
require 'config/init.php';
include 'components/header.html';
if (isset($_POST['submitcreer'])){
    if (!(empty($_POST['produit']) || empty($_POST['prix']))){

        $produit = $_POST['produit'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
       // $image = $_POST['image'];

        $requete = "INSERT INTO produits (produit, description, prix ) VALUES ('$produit', '$description', $prix)";
        $req = $pdo->prepare($requete);
        $req->execute();
    }
}


?>

<form action="creer.php" method="post">
<label for="nom">Produit :</label>
<input type="text" name='produit' id='produit' placeholder='produit'>
<br> <br>
<label for="nom">Description :</label>
<input type="text" name='description' id='description' placeholder='description'>
<br> <br>
<label for="prix"> Prix : </label>
<input type="int" name='prix' id='prix' placeholder='prix'>
<br> <br>
<input type="file" name='image' id='image' >
<br> <br>
<input type="submit" name='submitcreer' value='envoyer'>
</form>

<?php

include 'components/footer.html';
?>

