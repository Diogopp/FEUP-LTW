PRAGMA foreign_keys=ON;

BEGIN TRANSACTION;


.headers on
.mode columns

DROP TABLE IF EXISTS USER;
DROP TABLE IF EXISTS ELEMENT;
DROP TABLE IF EXISTS CATEGORY;

CREATE TABLE USER(
	idUser INTEGER PRIMARY KEY,
	name TEXT UNIQUE,
	dataNascimento DATE,
	password TEXT,
	pathImage TEXT,
	sexo TEXT,
	dataRegisto TEXT,
	extra TEXT
);


CREATE TABLE ELEMENT(
	idElement INTEGER PRIMARY KEY,
	tasks TEXT,
	deadLine DATE,
	done INTEGER,    /*0 - Nao; 1 - Sim; 2 - Nao atualizou*/
	idUser INTEGER,
	idCategory INTEGER,
	FOREIGN KEY(idUser) REFERENCES USER(idUser),
	FOREIGN KEY(idCategory) REFERENCES CATEGORY(idCategory)
);

CREATE TABLE CATEGORY(
	idCategory INTEGER PRIMARY KEY,
	category TEXT
);

COMMIT;


--Populating USER table


insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto, extra) values (90, 'root', '1997-03-13', '63a9f0ea7bb98050796b649e85481845', 'ornare consequat', 'in', '12/17/2016','I am the Root of all evil');
insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto, extra) values (28, 'amet eros', '1997-03-20', '14ea0c90502decc2e1c38aed4f1fb912', 'suspendisse potenti', 'odio', '5/24/2017','');
insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto, extra) values (31, 'ipsum', '2000-03-13', 'bd0d0b7e213f0b06d447ec4375843983', 'magna', 'eget massa', '2/25/2017','');
insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto, extra) values (100, 'eu', '1990-08-22', '82b97b0174fb29895c3560549b8b53c7', 'id', 'eget orci', '6/15/2017','teste Extra');
insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto, extra) values (93, 'nulla sed', '2000-03-13', 'a92a63a1816ff741e47640649792f576', 'quis turpis', 'auctor', '7/8/2017','asd');

--Populating CATEGORY table

insert into CATEGORY (idCategory , category ) values (95, 'risus');
insert into CATEGORY (idCategory , category ) values (47, 'nulla');
insert into CATEGORY (idCategory , category ) values (28, 'hac');
insert into CATEGORY (idCategory , category ) values (75, 'nulla');
insert into CATEGORY (idCategory , category ) values (100, 'nibh');
insert into CATEGORY (idCategory , category ) values (55, 'fusce');
insert into CATEGORY (idCategory , category ) values (81, 'vel');

--Populating ELEMENT table

insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (11, 'maecenas ut massa quis', '2017-25-12', 0, 90, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (1, 'Fazer LTW', '2017-25-12', 0, 90, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (2, 'Chorar PLOG', '2017-25-12', 0, 90, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (3, 'Rezar RCOM', '2017-25-12', 0, 90, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (56, 'vestibulum quam sapien varius', '2017-25-12', 1, 28, 47);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (99, 'quis lectus suspendisse potenti', '2017-25-12', 1, 31, 28);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (58, 'praesent id massa id nisl', '2017-25-12', 2, 100, 75);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (92, 'erat quisque erat', '2017-25-12', 2, 93, 100);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (30, 'nulla ut erat id', '2017-25-12', 0, 93, 55);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (81, 'at turpis donec posuere metus', '2017-25-12', 1, 93, 81);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (78, 'natoque penatibus et', '2017-25-12', 2, 100, 55);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (36, 'libero convallis eget', '2017-30-12', 0, 28, 55);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (40, 'semper sapien a', '2018-25-01', 0, 93, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (52, 'enim lorem ipsum dolor', '2017-25-12', 1, 90, 81);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (77, 'magnis dis parturient montes nascetur', 2017-25-12', 0, 100, 95);
