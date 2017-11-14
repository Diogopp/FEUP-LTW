PRAGMA foreign_keys=ON;

BEGIN TRANSACTION;


.headers on
.mode columns

DROP TABLE IF EXISTS USER;
DROP TABLE IF EXISTS ELEMENT;
DROP TABLE IF EXISTS CATEGORY;

CREATE TABLE USER(
	idUser INTEGER,
	name TEXT UNIQUE,
	dataNascimento DATE,
	password TEXT,
	pathImage TEXT,
	sexo TEXT,
	dataRegisto TEXT,
	PRIMARY KEY(idUser)
);


CREATE TABLE ELEMENT(
	idElement INTEGER,
	tasks TEXT,
	deadLine DATA,
	done INTEGER,    /*0 - Nao; 1 - Sim; 2 - Nao atualizou*/
	idUser INTEGER,
	idCategory INTEGER,
	PRIMARY KEY(idElement),
	FOREIGN KEY(idUser) REFERENCES USER(idUser),
	FOREIGN KEY(idCategory) REFERENCES CATEGORY(idCategory)
);

CREATE TABLE CATEGORY(
	idCategory INTEGER,
	category TEXT,
	PRIMARY KEY(idCategory)
);

COMMIT;
