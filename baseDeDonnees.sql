--- requête de création de la table BLURAY ---
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

INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES ('Transformers', '24-06-2009', 'Michael Bay', 'Shia LaBeouf, Megan Fox, Josh Duhamel', 'Action, Science Fiction', '2h24', 'https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/Visual_Principal_340/2/1/3/3333973159312/tsp20120921141809/Transformers-Blu-Ray.jpg', 6.99);
INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES ('Alien, le huitième passager', '12-09-1979', 'Ridley Scott', 'Sigourney Weaver, Tom Skerritt, Veronica Cartwright', 'Epouvante-horreur, Science Fiction', '1h56', 'https://static.fnac-static.com/multimedia/Images/FR/NR/96/a7/33/3385238/1540-1/tsp20131105170309/Alien-Le-huitieme-paager-Blu-ray.jpg', 14.99);
INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES ('Le Silence des agneaux', '10-04-1991', 'Jonathan Demme', 'Anthony Hopkins, Jodie Foster, Scott Glenn', 'Epouvante-horreur, Policier, Thriller', '1h58', 'https://static.fnac-static.com/multimedia/Images/FR/NR/b9/1e/ca/13246137/1540-1/tsp20210129114300/Le-Silence-des-agneaux-Blu-ray.jpg', 12.99);
INSERT INTO BLURAY (nom, date_sortie, realisateur, acteurs, genre, duree, url, prix) VALUES ('The Batman', '02-03-2022', 'Matt Reeves', 'Robert Pattinson, Zoë Kravitz, Paul Dano', 'Action Policier, Thriller', '2h57', 'https://static.fnac-static.com/multimedia/Images/FR/NR/8f/cf/d8/14208911/1540-1/tsp20220608162721/The-Batman-Blu-ray.jpg', 12.99);

--- requête de création de la table ADMIN ---
CREATE TABLE ADMIN (
    id int AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(50) NOT NULL,
    email VARCHAR(200) NOT NULL,
    motDePasse VARCHAR(100) NOT NULL
)

--- Requête d'insertion ---
INSERT INTO ADMIN (pseudo, email, motDePasse) VALUES ('root', 'root@admin.com', 'root');