<?php

    $servername = 'localhost';
    $bdd = 'mon_site';
    $username = 'mxcr';
    $password = 'spiderman';
    $conn = new mysqli($servername, $username, $password, $bdd);

    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }
?>