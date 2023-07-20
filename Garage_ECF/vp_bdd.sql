CREATE TABLE Vehicles (
  id INT(11) NOT NULL AUTO_INCREMENT,
  pics varchar(255) DEFAULT NULL,
  brand varchar(50) NOT NULL,
  model varchar(50) NOT NULL,
  color varchar(50) NOT NULL,
  mileage INT(12) NOT NULL,
  energy varchar(50) NOT NULL,
  year YEAR,
  price INT(11),
  PRIMARY KEY(id)
);

INSERT INTO Vehicles (id, pics, brand, model, color, mileage, energy, year, price) VALUES
  (1, 'img/car1.png', 'Volkswagen', 'Golf', 'Rouge', 98471, 'Essence', 2009, 9456),
  (2, 'img/car2.png', 'Bmw', 'X', 'Gris', 77814, 'Essence', 2011, 16458),
  (3, 'img/car3.png', 'Audi', 'RS6 II', 'Noir', 97563, 'Essence', 2011, 15840),
  (4, 'img/car4.png', 'Kia', 'CEED III', 'Jaune', 66050, 'Electrique', 2018, 16458),
  (5, 'img/car5.png', 'Mercedes', 'Classe S VI', 'Gris', 139700, 'Essence', 2005, 13458),
  (6, 'img/car6.png', 'Bmw', 'Série 5', 'Bleue', 98200, 'Essence', 2015, 24000);

CREATE TABLE Employes (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  adresse_email VARCHAR(100),
  mot_de_passe VARCHAR(50)
);

INSERT INTO Employes (id, nom, prenom, adresse_email, mot_de_passe) VALUES
  (1, 'Parrot', 'Vincent', 'vincentparrot@gmail.com', 'vparrot1234'),
  (2, 'Dubois', 'Marie', 'duboismarie@gmail.com', 'mdubois1234'),
  (3, 'Dupont', 'Jean', 'dupontjean@gmail.com', 'jdupont1234');

