PRAGMA foreign_keys=ON;

BEGIN TRANSACTION;


.headers on
.mode columns

DROP TABLE IF EXISTS USER;
DROP TABLE IF EXISTS ELEMENT;
DROP TABLE IF EXISTS CATEGORY;

CREATE TABLE USER(
	idUser INTEGER AUTOINCREMENT,
	name TEXT UNIQUE,
	dataNascimento DATE,
	password TEXT,
	pathImage TEXT,
	sexo TEXT,
	dataRegisto TEXT,
	PRIMARY KEY(idUser)
);


CREATE TABLE ELEMENT(
	idElement INTEGER AUTOINCREMENT,
	tasks TEXT,
	deadLine DATE,
	done INTEGER,    /*0 - Nao; 1 - Sim; 2 - Nao atualizou*/
	idUser INTEGER,
	idCategory INTEGER,
	PRIMARY KEY(idElement),
	FOREIGN KEY(idUser) REFERENCES USER(idUser),
	FOREIGN KEY(idCategory) REFERENCES CATEGORY(idCategory)
);

CREATE TABLE CATEGORY(
	idCategory INTEGER AUTOINCREMENT,
	category TEXT,
	PRIMARY KEY(idCategory)
);

COMMIT;


--Populating USER table


insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto ) values (90, 'root', '1/23/2001', 'root', 'ornare consequat', 'in', '12/17/2016');
insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto ) values (28, 'amet eros', '9/16/2004', 'ReuXf2Iu', 'suspendisse potenti', 'odio', '5/24/2017');
insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto ) values (31, 'ipsum', '2/8/2002', '9BP63Czxe', 'magna', 'eget massa', '2/25/2017');
insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto ) values (100, 'eu', '11/12/2000', 'BIfj7GzYM0', 'id', 'eget orci', '6/15/2017');
insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto ) values (93, 'nulla sed', '3/23/2005', 'pHrheCeNBwz2', 'quis turpis', 'auctor', '7/8/2017');

--Populating CATEGORY table

insert into CATEGORY (idCategory , category ) values (95, 'risus');
insert into CATEGORY (idCategory , category ) values (47, 'nulla');
insert into CATEGORY (idCategory , category ) values (28, 'hac');
insert into CATEGORY (idCategory , category ) values (75, 'nulla');
insert into CATEGORY (idCategory , category ) values (100, 'nibh');
insert into CATEGORY (idCategory , category ) values (55, 'fusce');
insert into CATEGORY (idCategory , category ) values (81, 'vel');

--Populating ELEMENT table

insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (11, 'maecenas ut massa quis', '8/19/2017', 0, 90, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (1, 'Fazer LTW', '8/19/2017', 0, 90, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (2, 'Chorar PLOG', '8/19/2017', 0, 90, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (3, 'Rezar RCOM', '8/19/2017', 0, 90, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (56, 'vestibulum quam sapien varius', '6/13/2017', 1, 28, 47);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (99, 'quis lectus suspendisse potenti', '11/2/2017', 1, 31, 28);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (58, 'praesent id massa id nisl', '11/3/2017', 2, 100, 75);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (92, 'erat quisque erat', '11/25/2016', 2, 93, 100);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (30, 'nulla ut erat id', '3/26/2017', 0, 93, 55);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (81, 'at turpis donec posuere metus', '7/11/2017', 1, 93, 81);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (78, 'natoque penatibus et', '12/14/2016', 2, 100, 55);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (36, 'libero convallis eget', '12/11/2016', 0, 28, 55);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (40, 'semper sapien a', '6/25/2017', 0, 93, 95);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (52, 'enim lorem ipsum dolor', '6/16/2017', 1, 90, 81);
insert into ELEMENT (idElement , tasks , deadLine, done , idUser, idCategory ) values (77, 'magnis dis parturient montes nascetur', '1/21/2017', 0, 100, 95);
