<?php

require 'config/init.php';

$requete = 'SELECT * FROM produits';

$req = $pdo->prepare($requete);
$req->execute();

$resultats = $req->fetchAll(PDO::FETCH_ASSOC);

include 'components/header.html';
include 'functions/card1.php';


// requete de sélection
    // SELECT * FROM produits;
    // utiliser prepare()
    // utiliser execute()
        // $req->execute()

// récupérer les résultats
    // $resultats = $req->fetchAll(PDO::FETCH_ASSOC)

// inclure head, header -> commence le HTML de notre page

// boucle foreach
    // foreach ($resultats as $r)
        // appeler ta fonction card
        // card($r['titre'], $r['prix'])

        $a = new produit('produit', 'description',100, 'image' );
        $b = new produit('produit', 'description', 200, 'image');
        $c = new produit('produit', 'description', 250, 'image');

        $arrayCards = [$a, $b, $c];






foreach ($resultats as $r) {
    card($r['produit'] $r['description'] $r[prix] $r['image']);
}

include 'components/footer.html';

?>