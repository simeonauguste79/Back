SQL DISTINCT

SQL DISTINCT => --permet de lire toutes les données ou informations d'une ou plusieurs colonnes

Commande basique

--L’utilisation basique de cette commande consiste alors à effectuer la requête suivante:

SELECT DISTINCT ma_colonne FROM nom_du_tableau;
--Cette requête sélectionne le champ “ma_colonne” de la table “nom_du_tableau” en évitant de retourner des doublons.

SQL SQL_NO_CACHE

--L’option SQL_NO_CACHE est utilisée juste après la commande SELECT afin de spécifier qu’aucun cache ne doit être appliqué sur une requête. Cette fonctionnalité est particulièrement utile lorsqu’un développeur souhaite estimer le temps de chargement d’une requête sans que le résultat ne soit biaisé par une mise en cache.

Syntaxe

Cette option s’utilise dans une requête SQL via la syntaxe suivante :

SELECT SQL_NO_CACHE * FROM table;

