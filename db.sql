-- Database: phpdb

-- DROP DATABASE IF EXISTS phpdb;

CREATE DATABASE phpdb
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'French_France.1252'
    LC_CTYPE = 'French_France.1252'
    LOCALE_PROVIDER = 'libc'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;

-----------------------------------------------------------------

CREATE TABLE header (
	identifiant integer primary key,
	nom varchar(1000),
	age varchar(1000)
);

INSERT INTO header VALUES
(1, 'Thomas DA SILVA', 'Homme - 18 août 1999');

-----------------------------------------------------------------

CREATE TABLE objectifs (
	identifiant integer primary key,
	objectifs varchar(1000)
);

INSERT INTO objectifs VALUES
(1, 'Actuellement en première année de Master Géomatique, je suis captivé par la programmation et le développement. Mon expérience en alternance à la Préfecture de Police de Paris a renforcé mon intérêt pour ce domaine. J''aspire à devenir développeur, attiré par la créativité et la résolution de problèmes.');

-----------------------------------------------------------------

CREATE TABLE experiences (
	identifiant integer primary key,
	bold1 varchar(1000),
	liste1 varchar(1000),
	bold2 varchar(1000),
	liste2 varchar(1000),
	bold3 varchar(1000),
	liste3 varchar(1000)
);

INSERT INTO experiences VALUES
(1, 
'DÉVELOPPEUR WEB JUNIOR - SOCIÉTÉ TECH INNOVATION - 03 OCTOBRE 2023 JUSQU''À MAINTENANT',
'Création et maintenance d''applications web pour les clients de l''entreprise.',
'STAGIAIRE DATA ANALYST - ENTREPRISE DATAVIS - 15 JANVIER - 28 FÉVRIER 2023',
'Analyse de données et création de tableaux de bord pour le service marketing.',
'ASSISTANT ADMINISTRATIF - CABINET CONSEIL XYZ - 01 JUILLET - 31 AOÛT 2022',
'Support administratif et gestion documentaire pour l''équipe des consultants.');

-----------------------------------------------------------------

CREATE TABLE formations (
	identifiant integer primary key,
	bold1 varchar(1000),
	liste1 varchar(1000),
	bold2 varchar(1000),
	liste2 varchar(1000),
	bold3 varchar(1000),
	liste3 varchar(1000)
);

INSERT INTO formations VALUES
(1, 
'MASTER GEOMATIQUE, GEODECISIONNEL, GEOMARKETING ET MULTIMEDIA (G2M) - 2023 JUSQU''À MAINTENANT - PARIS 8 VINCENNES SAINT-DENIS', 
'M1 G2M en Alternance.', 
'LICENCE GÉOGRAPHIE ET AMÉNAGEMENT - 2019/2023 - PARIS 8 VINCENNES SAINT-DENIS', 
'Mention Assez bien (AB).', 
'BACCALAURÉAT - 2019 - LYCÉE CHARLES LECLER', 
'Obtention du baccalauréat scientifique (S).');

-----------------------------------------------------------------

CREATE TABLE langues (
	identifiant integer primary key,
	langue1 varchar(1000),
	langue2 varchar(1000)
);

INSERT INTO langues VALUES
(1,
'Français (Natif).', 
'Anglais B1 (Niveau seuil).');

-----------------------------------------------------------------

CREATE TABLE contacts (
	identifiant integer primary key,
	email varchar(1000),
	telephone varchar(1000),
	adresse varchar(1000)
);

INSERT INTO contacts VALUES
(1,
'thomas.dasilva@gmail.com',
'07 66 43 56 77',
'93, Seine-Saint-Denis');
