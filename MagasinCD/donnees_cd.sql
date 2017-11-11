CREATE TABLE artistes (
ID INT AUTO_INCREMENT,
nom VARCHAR(50) NOT NULL,
prenom VARCHAR(50) NOT NULL,
pays VARCHAR(50) NOT NULL,
PRIMARY KEY(ID)
)ENGINE=InnoDB;

CREATE TABLE genres (
ID INT AUTO_INCREMENT,
nom VARCHAR(50) NOT NULL,
PRIMARY KEY(ID)
)ENGINE=InnoDB;

CREATE TABLE albums (
ID INT AUTO_INCREMENT,
titre VARCHAR(50) NOT NULL,
prixCD DECIMAL(5,2),
image VARCHAR(50) NOT NULL,
nbVentes INT UNSIGNED,
IDArtiste INT,
IDGenres INT,
PRIMARY KEY(ID),
FOREIGN KEY (IDArtiste) REFERENCES artistes(ID),
FOREIGN KEY (IDGenres) REFERENCES genres(ID)
)ENGINE=InnoDB;

CREATE TABLE pistes(
ID INT AUTO_INCREMENT,
titre VARCHAR(50) NOT NULL,
duree INT NOT NULL,
prix DECIMAL(3,2),
evaluation TINYINT DEFAULT 0,
nbVentes INT,
IDAlbum INT,
PRIMARY KEY(ID),
FOREIGN KEY (IDAlbum) REFERENCES albums(ID)
)ENGINE=InnoDB;

/*Insertions*/

INSERT INTO artistes (ID, nom, prenom, pays ) VALUES 
(1, "Martin", "Ricky", "Espagne"),
(2, "Dion","Céline", "Canada"),
(3, "Michael","George", "Grande Bretagne"), 
(4, "Jackson","Michael", "États-Unis"),
(5, "Braxton","Toni", "États-Unis");

INSERT INTO genres (ID, nom) VALUES 
(1, "Latino"),
(2, "Pop"),
(3, "Disco"),
(4, "RnB");

INSERT INTO albums VALUE 
(1 ,"Life", 5.99, "img/Ricky_Martin_Life", 15, 1, 1),
(2 ,"A New Day Has Come", 7.99, "img/Celine_Dion_ANewDayHasCome", 10, 2, 2),
(3 ,"Faith", 8.99, "img/George_Michael_Faith", 30, 3, 3),
(4 ,"Scream", 9.50, "img/Michael_Jackson_Scream", 25, 4, 2),
(5 ,"The Heat", 4.99, "img/Toni_Braxton_TheHeat", 23, 5, 4);

INSERT INTO pistes VALUE 
(1 ,"Till I Get to You", 150, 0.99, 4, 50, 1),
(2 ,"Life", 180, 0.99, 5, 75, 1),
(3 ,"This Is Good", 120, 0.99, 4, 53, 1),
(4 ,"Stop Time Tonight", 155, 0.99, 5, 54, 1),

(5 ,"A New Day Has Come", 120, 1.99, 5, 24, 2),
(6 ,"Prayer", 135, 1.99, 4, 55, 2),
(7 ,"I Surrender", 155, 1.99, 3, 10, 2),
(8 ,"Right in Front of You", 170, 1.99, 4, 45, 2),

(9 ,"Faith", 120, 2.99, 5, 60, 3),
(10 ,"One More Try", 130, 2.99, 5, 55, 3),
(11 ,"Hard Day", 200, 2.99, 5, 45, 3),
(12 ,"Monkey", 175, 2.99, 5, 23, 3),

(13 ,"Blood On The Dance Floor", 155, 1.50, 4, 100, 4),
(14 ,"Scream", 175, 1.50, 5, 120, 4),
(15 ,"Thriller", 120, 1.50, 4, 125, 4),
(16 ,"Somebody's Watching Me", 200, 1.50, 5, 97, 4),

(17 ,"I'm Still Breathing", 175, 0.99, 3, 12, 5),
(18 ,"Maybe", 200, 0.99, 4, 45, 5),
(19 ,"The Heat", 125, 0.99, 5, 68, 5),
(20 ,"Gimme Some", 140, 0.99, 4, 77, 5);

