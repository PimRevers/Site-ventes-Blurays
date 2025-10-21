<?php

    function ajouter($nom, $date_sortie, $realisateur, $acteurs, $genre, $duree, $url) {
        if (require("connexion.php")) {
            $query = "INSERT INTO BLURAY VALUES ($nom, $date_sortie, $realisateur, $acteurs, $genre, $duree, $url)";

            $resultat = $conn -> execute_query($query);

            $resultat ->closeCursor();
        }
    }

    function afficher() {
        if (require("connexion.php")) {
            $query = "SELECT * FROM BLURAY ORDER BY id DESC";

            $resultat = $conn -> execute_query($query);

            while ($ligne = $resultat->fetch_assoc()) {
	            echo $ligne['id'] . '<br>';
                echo $ligne['nom'] . '<br>';
                echo $ligne['date_sortie'] . '<br>';
                echo $ligne['realisateur'] . '<br>';
                echo $ligne['acteurs'] . '<br>';
                echo $ligne['genre'] . '<br>';
                echo $ligne['duree'] . '<br>';
                echo $ligne['url'];
                echo '<button>Acheter</button>' . '<br>';
                echo '<br>';
        
            }

            $resultat ->closeCursor();
        }
    }

    function supprimer($id) {
        if (require("connexion.php")) {
            $query = "DELETE FROM BLURAY WHERE id = ?";
            
            $resultat = $conn -> execute_query($query);

            $resultat ->closeCursor();
        }
    }

?>