BASE DE DONNEES 
-- Connexion à la BDD --

 mysql -u root -p

-- Afficher les BDD --

SHOW DATABASES;

-- Créer une BDD --

CREATE DATABASE nom_de_la_BDD;

-- Sélectionner une BDD --

USE nom_de_la_BDD;

-- Type de donnés(INT, VARCHAR, TEXT, FLOAT...)

CREATE TABLE fruit (id_fruit INT(3),nom VARCHAR(60), origine VARCHAR(), calibre INT(1), prix FLOAT, categorie VARCHAR(20));

-- Insertion dans la BDD --

INSERT INTO nom_de_la_TABLE ('1', 'pomme', 'france', '5', '12.5', 'Golden');

-- Supprimer une ligne de la table avec une condition --

DELETE FROM nom_de_la_TABLE WHERE condition;

DELETE FROM nom_de_la_table;

-- Mettre à jour une colonne d'une table --

UPDATE nom_de_la_table SET nom_colonne condition;

-- Mettre a jour plusieurs colonnes d'une table ---

UPDATE nom_de_la_table SET nom_colonne , nom_de_la_colonne WHERE 'condition';

ex: UPDATE fruit SET origine= 'Espagne', calibre ='4', prix ='3.99' WHERE id_fruit= '2';

--- Ajouter une colonne a une table ---

ALTER TABLE nom_de_la_table ADD nom_de_la_colonne;

--- Operateur de comparaison ---

= :Egale

<> :Pas Egale

!= :Pas Egale

> :Superieur

< :Inferieur

>= :Superieur ou égale à

<= :Inferieur ou égale à

IN :Liste de plusieur valeurs possibles

BEETWEEN : recherche des valeurs comprises dans un interval donné (utile pour les nombres ou dates)

LIKE : recherche en specifiant le debut, le milieu ou la fin d'un mot

IS NULL :valeur est nulle

IS NOT NULL : valeur n'est pas nulle

-- Selectionner des données entre (BETWEEN) un interval (fonctionne dans une requête utilisant WHERE) --

SELECT * FROM   bonbons where id_bonbon BETWEEN 2 AND 6;

 ---------------Exercice---------------------

 afficher les données dans l'ordre decroissant

 SELECT prenom FROM stagiaires where yeux = 'marron' ORDER BY id_stagiaire DESC;

 -- Selectionner des données entre (BETWEEN) un interval (fonctionne dans uine requete utilisant WHERE) ---

ex: SELECT * FROM bonbons WHERE id_bonbon BETWEEN 3 and 6

-- AFFicher les données par rapport à une valeur --

SELECT nom_colonne FROM nom_de_la_table WHERE nom_colonne ='valeur';

ex:  SELECT prenom FROM stagiaires WHERE yeux = 'marron';

autre : SELECT * FROM stagiaires WHERE yeux = 'marron';

-- Afficher les données dans un ordre défini --

SELECT * FROM stagiaires WHERE yeux= 'marron' ORDER BY prenom;

-- Afficher les données dans l'ordre décroissant --

SELECT * FROM stagiaires WHERE yeux= 'marron' ORDER BY prenom DESC;

-- Afficher Tous les stagiaires dont le prénom commencent par L --

SELECT * FROM stagiaires WHERE prenom LIKE 'L%';

-- Afficher ls stagiaires dont le prénom se terminent par n --

SELECT * FROM stagiaires WHERE prenom LIKE '%N';

-- Afficher les stagiaires dont le prénom contient un a --

SELECT * FROM stagiaires WHERE prenom LIKE '%a%';

-- Afficher les stagiaires dont le prénom commence par J et qui contient un 'a' et se terminent par 'n'

SELECT * FROM stagiaires WHERE prenom LIKE 'J%a%n';

-- Afficher un nombre limité de données---

SELECT*FROM stagiaires LIMIT 2;

--Afficher un nombre limité de données en sautant des lignes--

SELECT*FROM stagiaires LIMIT 1,2;

(Le premier chiffre aprés LIMIT représente l'offset donc le nombre de ligne ignoré. le second chiffre corerspond aux nombres de données à afficher).





La premiere chose à faire c'est de se connecter à la BDD (base de données)
mysql -u root -p => entrer
Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.
MariaDB [(none)]> show databases SHOW databases;

----CREER UNE BASE DE DONNEE BDD---

CREATE DATABASE nom_de_la_BDD;
SHOW 

CREATION D'UNE TABLE DANS LA BDD
Type de donnée  (INT, VARCHAR, TEXT, FLOAT, ...)

Ligne de commande pour créer la TABLE
Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

CREATE TABLE utilisateur
(
    id INT PRIMARY KEY NOT NULL,
    nom_produit VARCHAR(100),
    categorie_produit VARCHAR(100),
    reference_produit VARCHAR(255),
    prix_produit DATE,
    stock_produit(255),
    date_ajout(255),
    code_postal VARCHAR(5),
    nombre_achat INT
)

MariaDB [(none)]>
-----------------------------------AFFICHER TOUTES LES TABLES-------------------------
SHOW TABLES;
        INSERTION DANS LA BDD 

        1/ INSERT INTO nom_de_la_TABLE ('1', 'pomme', 'France', '5', '12,50', 'Golden');
Ligne code pour afficher l'interieur de ma TABLE
SELECT * FROM fruits;
Comment selectionner les données d'une TABLE ?

SELECT nom, categorie FROM fruits;

------------------------------------SELECT FROM---------------------------------------


Supprimer une Ligne 
DELETE FROM nom_de__la_table WHERE condition;
---------------------METTRE À JOUR-----------------------------------
UPDATE fruits SET calibre = '7' WHERE id_fruit = '2';

--------------------------------SUPPRIMER TOUT--------------------------------------------
DELETE FROM nom_de_la_table /!\ si vous faites cela vous effacez tout le contenu de la table.

-----------------------AJOUTER UNE COLONNE À UNE TABLE--------------------------

ALTER TABLE nom_de_la-table ADD nom_de_la_colonne;

------------------------------OPERATUER COMPARAISON------------------------------------------


= GEgale
<> Pas egale
!= Ps égale
> Superieur
< Inferieur
>= Superieur ou égale
<= Inferieur ou égale
IN Liste de plusieurs valeurs possibles 
BETWEEN recherche des valeurs comprises dans un intervalle donné (utile pour les nombres ou dates)
LIKE Recherche en specifiant le debut, le milieu ou la fin d'un mot.
IS NULL Valeur est nulle 
IS NOT NULL  La valeur n'est pas nulle.



-----------------------------SELECTIONER DES DONNEES ENTRE (BETWEEN)--------------------------
Requete utilisant WHERE
SELECT * FROM id_bobon BETWEEN 2 AND 6;




----------------------------------EXERCICE------------------------------------


Manipuler la table stagiaire 
FROM stagiaires WHERE yeux = 'marron' ORDER BY prenom;

 SELECT * FROM stagiaires WHERE yeux = 'marron' ORDER BY id_stagiaire DESC;
Par ordre croissant 

-- Selectionner des données entre (BETWEEN) un interval (fonctionne dans uine requete utilisant WHERE) ---

ex: SELECT * FROM bonbons WHERE id_bonbon BETWEEN 3 and 6

-- AFFicher les données par rapport à une valeur --

SELECT nom_colonne FROM nom_de_la_table WHERE nom_colonne ='valeur';

ex:  SELECT prenom FROM stagiaires WHERE yeux = 'marron';

autre : SELECT * FROM stagiaires WHERE yeux = 'marron';

-- Afficher les données dans un ordre défini --

SELECT * FROM stagiaires WHERE yeux= 'marron' ORDER BY prenom;

-- Afficher les données dans l'ordre décroissant --

SELECT * FROM stagiaires WHERE yeux= 'marron' ORDER BY prenom DESC;

-- Afficher Tous les stagiaires dont le prénom commencent par L --

SELECT * FROM stagiaires WHERE prenom LIKE 'L%';

-- Afficher ls stagiaires dont le prénom se terminent par n --

SELECT * FROM stagiaires WHERE prenom LIKE '%N';

-- Afficher les stagiaires dont le prénom contient un a --

SELECT * FROM stagiaires WHERE prenom LIKE '%a%';

-- Afficher les stagiaires dont le prénom commence par J et qui contient un 'a' et se terminent par 'n'

SELECT * FROM stagiaires WHERE prenom LIKE 'J%a%n';



------------------------------------AFFICHER LES LIMITES DE DONNEES----------------------------------------


SELECT * FROM stagiaires LIMIT 2,
SELECT * FROM stagiaires LIMIT 1,2,3
(le pemier chiffre après LIMIT represente l'offset donc le nombre de ligne ignorée. Le second correspond aux nombres de données à afficher.)



--------------------------------------------------------------EXERCICE-------------------------------------------

-- Exercice: Créé une base de données magasin

-- Créé une table produit qui contient les colonnes suivantes:

-- id -> INT PRIMARY KEY AUTO_INCREMENT NOT NULL

-- nom_produit -> débrouillez-vous

-- catégorie_produit -> débrouillez-vous

-- reference_produit -> débrouillez-vous

-- prix_produit -> débrouillez-vous

-- stock_produit -> débrouillez-vous

-- date_ajout -> débrouillez-vous

-- Insérer au moins 20 produits

-- Afficher tous les produits classé du plus récent au plus ancien

-- Afficher les 10 premiers produits

-- Afficher les 10 derniers produits

-- Ajouter une colonne date_vente

-- Afficher les produits entre 2 date de vente

-- Afficher les 10 derniers produits

-- Afficher les 10 produits du milieu

-- Afficher les produits commencent par une lettre spécifique

CREATE TABLE xxxxx (id xxxxxx INT(3)) PRIMARY EY AUTO_INCREMENT NOT NULL 
INSERT INTO exple table xxxxx 
Ne plus remettre l'id, elle est dejà crééé 
------------------------------------------------FIN DE L'EXO-------------------------------------------------
