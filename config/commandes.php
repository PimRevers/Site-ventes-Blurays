<?php

    function getAdmin($email, $password) {
        require_once("connexion.php");


        $query = "SELECT id,email,motDePasse FROM ADMIN WHERE email = ?";

        $resultat = $conn->prepare($query);

        $resultat->bind_param("s", $email);

        if (!$resultat) {
            die("Erreur préparation : " . $conn->error);
        }

        $resultat->execute();

        if ($conn->error) {
            die("Erreur exécution : " . $conn->error);
        }   

        $result = $resultat->get_result();

        if ($result->num_rows === 1) {
            $data = $result->fetch_assoc();
            $result->close();
            return $data;
        }
        else {
            die("Erreur: result est vide");
            $result->close();
            return false;
        }
    }

    function ajouter($nom, $date_sortie, $realisateur, $acteurs, $genre, $duree, $url, $prix) {
        require("connexion.php");

        $query = "INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

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