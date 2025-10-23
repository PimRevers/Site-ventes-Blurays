--- requête de création de la table ---
CREATE TABLE BLURAY (
    id int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(25) NOT NULL,
    date_sortie VARCHAR(10) NOT NULL,
    realisateur VARCHAR(50) NOT NULL,
    acteurs VARCHAR(500),
    genre VARCHAR(100),
    duree VARCHAR(4),
    url VARCHAR(500),
    prix DECIMAL(4,2)
)

--- Requête d'insertion ---
INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES ('Avengers Infinity War', '25-04-2018', 'Joe Russo, Anthony Russo', 'Robert Downey Jr., Chris Hemsworth, Mark Ruffalo', 'Action, Aventure, Science Fiction', '2h36', 'https://static.fnac-static.com/multimedia/Images/FR/NR/ed/00/97/9896173/1540-1/tsp20180816154234/Avengers-Infinity-War-Blu-ray.jpg', 14.99);
INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES ('Gladiator', '20-06-2000', 'Ridley Scott', 'Russel Crowe, Joaquin Phoenix, Connie Nielsen', 'Action, Aventure, Historique', '2h35', 'https://static.fnac-static.com/multimedia/Images/FR/NR/90/ad/8b/9153936/1540-1/tsp20180606160944/Gladiator-Blu-ray.jpg', 9.99);
INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES ('Le Parrain', '18-10-1972', 'Francis Ford Coppola', 'Marlon Brando, Al Pacino, James Caan', 'Drame, Policier', '2h55', 'https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/Visual_Principal_340/9/5/7/3333973161759/tsp20120920095352/Le-Parrain-Blu-Ray.jpg', 22.99);
INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES ('Interstellar', '05-11-2014', 'Christopher Nolan', 'Matthew McConaughey, Anne Hathaway, Michael Caine', 'Drame, Science Fiction', '2h49', 'https://static.fnac-static.com/multimedia/Images/FR/NR/7e/5b/64/6577022/1540-1/tsp20150127133608/Interstellar-Blu-Ray.jpg', 10.99);