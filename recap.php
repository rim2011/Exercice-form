
<?php
if ($_POST['nom'] || $_POST['prenom'] || $_POST['adresse']|| $_POST['nombreSandwitch']|| $_POST['select_box']) {
    echo "Bonjour: " . $_POST['nom'] . " " . $_POST['prenom'] . "<br/>";
    echo "Vous avez commandé: " . $_POST['nombreSandwitch'] . " sandwitchs ".$_POST['select_box']."<br/>";

    foreach ($_POST['choix'] as $value) {
        echo "L'ingrédient $value a été ajouté<br/>";
    }
    $prix = $_POST['nombreSandwitch'] * 4;
    if ($_POST['nombreSandwitch'] > 10)
        $prix = $prix - $prix * 10 / 100;
    echo "Le prix total de la commande est: " . $prix . " dinars<br/>";
    echo "Votre commande sera livrée à l'adresse : " . $_POST['adresse'] . "<br/>";


    if (move_uploaded_file($_FILES["fichier"]["tmp_name"], __DIR__ . "/uploads/" . uniqid() . $_FILES["fichier"]["name"])) {

        echo "<script>alert(\"Upload effectué avec succès !\")</script>";
    }
    else
        {
        echo "<script>alert(\"Echec de l\'upload !\")</script>";
    }
}
