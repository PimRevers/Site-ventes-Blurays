<?php

    function ajouter($nom, $date_sortie, $realisateur, $acteurs, $genre, $duree, $url) {
        if (require("connexion.php")) {
            $query = "INSERT INTO BLURAY VALUES ($nom, $date_sortie, $realisateur, $acteurs, $genre, $duree, $url)";

            $resultat = $conn->execute_query($query);

            $resultat->free_result();
        }
    }

    function afficher() {
        require("connexion.php");

        $query = $conn->query("SELECT * FROM BLURAY");
        $resultat = $query->fetch_all(MYSQLI_ASSOC);
        $query->free_result();

        return $resultat;
    }

    function supprimer($id) {
        if (require("connexion.php")) {
            $query = "DELETE FROM BLURAY WHERE id = ?";
            
            $resultat = $conn->execute_query($query);

            $resultat->free_result();
        }
    }

?>