create table user(
    iduser INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    mdp VARCHAR(255)
);

create table categorie(
    idcategorie INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255)
);

create table objet(
    idobjet INT PRIMARY KEY AUTO_INCREMENT,
    idcategorie INT,
    iduser INT,
    nom VARCHAR(255),
    description TEXT,
    photo VARCHAR(255),
    prix DOUBLE,
    FOREIGN KEY (idcategorie) REFERENCES categorie(idcategorie),
    FOREIGN KEY (iduser) REFERENCES user(iduser)
);

create table demande (
    iddemande INT PRIMARY KEY AUTO_INCREMENT,
    idsend INT,
    idreceive INT,
    date_demande DATE,
    idobjetsend INT,
    idobjetreceive INT,
    FOREIGN KEY (idsend) REFERENCES user(iduser),
    FOREIGN KEY (idreceive) REFERENCES user(iduser),
    FOREIGN KEY (idobjetsend) REFERENCES objet(idobjet),
    FOREIGN KEY (idobjetreceive) REFERENCES objet(idobjet)
);


create table confirmer (
    idconfirmer INT PRIMARY KEY AUTO_INCREMENT,
    iddemande INT,
    dateconfirmer DATE,
    FOREIGN KEY (iddemande) REFERENCES demande(iddemande)
);


INSERT INTO user VALUES(null,'test','test');
INSERT INTO user VALUES(null,'jean','jean');
INSERT INTO user VALUES(null,'jeane','jeane');
INSERT INTO user VALUES(null,'solange','solange');

INSERT INTO user VALUES(null,'admin','admin');



INSERT INTO categorie VALUES(null,'accessoir');
INSERT INTO categorie VALUES(null,'electronique');
INSERT INTO categorie VALUES(null,'mecanique');

INSERT INTO objet VALUES(null,1,1,'collier coeur','ceci sont des collier pour les amoureux se separe en deux mais peuvent se recoller quand vous etes ensemble','5.jpg',25000);
INSERT INTO objet VALUES(null,2,1,'smartphone','Iphone 7 de seconde main ne comporte aucun probleme','6.jpg',550000);
INSERT INTO objet VALUES(null,3,1,'cle de 11','cle de 11 cle de seconde main un peu difficile a manier','17.jpg',10000);
INSERT INTO objet VALUES(null,1,1,'lunette','lunette de soleil verre circulaire momture exact pour chacun','11.jpg',9500);

INSERT INTO objet VALUES(null,2,2,'cle usb','cle usb en forme de voiture de 32GB amusant et pratique au travail','38.jpg',28000);
INSERT INTO objet VALUES(null,3,2,'velo','velo rose classique sans modification','13.jpg',36500);
INSERT INTO objet VALUES(null,2,2,'casque','casque jbl ultra bass modifiable selon le porteur model 2','15.jpg',45000);
INSERT INTO objet VALUES(null,1,2,'rouge a levre','pour vous les dames rouge a levre couleur ecarlate pour mettre en valeur les levre pulpeuse ','29.jpg',8500);

INSERT INTO objet VALUES(null,1,3,'botte','botte tendance en ce moment inspirer des bottes des artiste coreen','31.jpg',75600);
INSERT INTO objet VALUES(null,2,3,'PS5','PS5 encore en bonne etat de 3TB','34.jpg',1000000);
INSERT INTO objet VALUES(null,3,3,'trotinette','trotinette violet pour enfant le violet est tailler pour les petites fille','20.jpg',56000);
INSERT INTO objet VALUES(null,2,3,'cle usb','cle usb 16GB avec un design pour les fans de voiture','14.jpg',30000);

INSERT INTO objet VALUES(null,1,4,'casquette','casquette noir a motif couleur or','33.jpg',8500);
INSERT INTO objet VALUES(null,1,4,'cartable','cartable classique de couleur noir marque PUMA','35.jpg',25000);
INSERT INTO objet VALUES(null,3,4,'hache','hache classique pour coupe du bois pour la chemine ou le barbecue','19.jpg',15000);
INSERT INTO objet VALUES(null,2,4,'cle usb','cle de 64GB en forme de sport bugatti','22.jpg',65500);


