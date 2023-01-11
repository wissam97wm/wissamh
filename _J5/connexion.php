<?php
include 'components/head.html';
?>


<?php
require 'config/init.php';
include 'components/header.html';
if (isset($_POST['submitinscription'])){
    if (!(empty($_POST['email']) || empty($_POST['mdp']))){

        $mdp = $_POST['mdp'];
        $email = $_POST['email'];

        $requete = "INSERT INTO administrateur (email, mdp) VALUES ('$mdp', '$email')";
        $req = $pdo->prepare($requete);
        $req->execute();
    }
}

?>

<form action="inscription.php" method="post">
<label for="nom">Utilisateur :</label>
<input type="text" name='email' id='email' placeholder='Email'>
<input type="text" name='mdp' id='mdp' placeholder='Mot de passe'>
<input type="submit" name='submitinscription' value='envoyer'>
</form>
<?php
include 'components/footer.html';
?>