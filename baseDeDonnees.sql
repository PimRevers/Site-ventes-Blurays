--- requête de création de la table ---
CREATE TABLE BLURAY (
    id int(11) PRIMARY KEY,
    nom VARCHAR(25) NOT NULL,
    date_sortie date NOT NULL,
    realisateur VARCHAR(50) NOT NULL,
    acteurs VARCHAR(500),
    genre VARCHAR(100),
    duree VARCHAR(4),
    url VARCHAR(100)
)

--- Requête d'insertion ---
INSERT INTO BLURAY VALUES (1, 'Avengers Infinity War', '2018-04-25', 'Joe Russo, Anthony Russo', 'Robert Downey Jr., Chris Hemsworth, Mark Ruffalo', 'Action, Aventure, Science Fiction', '2h36', 'https://static.fnac-static.com/multimedia/Images/FR/NR/ed/00/97/9896173/1540-1/tsp20180816154234/Avengers-Infinity-War-Blu-ray.jpg');
INSERT INTO BLURAY VALUES (2, 'Gladiator', '2000-06-20', 'Ridley Scott', 'Russel Crowe, Joaquin Phoenix, Connie Nielsen', 'Action, Aventure, Historique', '2h35', 'https://static.fnac-static.com/multimedia/Images/FR/NR/90/ad/8b/9153936/1540-1/tsp20180606160944/Gladiator-Blu-ray.jpg');
INSERT INTO BLURAY VALUES (3, 'Le Parrain', '1972-10-18', 'Francis Ford Coppola', 'Marlon Brando, Al Pacino, James Caan', 'Drame, Policier', '2h55', 'https://static.fnac-static.com/multimedia/Images/FR/NR/31/a9/d6/14068017/1540-1/tsp20241108093040/Coffret-Le-Parrain-Trilogie-Edition-50eme-Anniversaire-Blu-ray.jpg');
INSERT INTO BLURAY VALUES (4, 'Interstellar', '2014-11-05', 'Christopher Nolan', 'Matthew McConaughey, Anne Hathaway, Michael Caine', 'Drame, Science Fiction', '2h49', 'https://static.fnac-static.com/multimedia/Images/FR/NR/7e/5b/64/6577022/1540-1/tsp20150127133608/Interstellar-Blu-Ray.jpg');