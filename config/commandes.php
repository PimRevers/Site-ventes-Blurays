<?php

    function ajouter($nom, $date_sortie, $realisateur, $acteurs, $genre, $duree, $url, $prix) {
        require("connexion.php");

        $query = "INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        #$query = "INSERT INTO BLURAY VALUES ($nom, $date_sortie, $realisateur, $acteurs, $genre, $duree, $url, $prix)";

        $resultat = $conn->prepare($query);

        $resultat->bind_param("sssssssd", $nom, $date_sortie, $realisateur, $acteurs, $genre, $duree, $url, $prix);
        $resultat->execute();

        $resultat->close();
    }

    function afficher() {
        require("connexion.php");

        $query = $conn->query("SELECT * FROM BLURAY");
        $resultat = $query->fetch_all(MYSQLI_ASSOC);
        $query->free_result();

        return $resultat;
    }

    function supprimer($id) {
        require("connexion.php");
        $query = "DELETE FROM BLURAY WHERE id = ?";

        $resultat = $conn->prepare($query);
        $resultat->bind_param("i", $id);
        $resultat->execute();

        $resultat->close();
    }

?>