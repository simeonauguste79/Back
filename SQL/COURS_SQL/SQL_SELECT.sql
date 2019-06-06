SQL SELECT


--Commande basique

SELECT nom_du_champ FROM nom_du_tableau
--Selectionne une colonne
SELECT ville FROM client;

--Selectionner 2 colonnes 

SELECT prenom, nom FROM client;

--Obtenir toutes les colonnes d’un tableau

SELECT * FROM client;

---Cours avancé : ordre des commandes du SELECT

    --Joindre un autre tableau aux résultats
    --Filtrer pour ne sélectionner que certains enregistrements
    --Classer les résultats
    --Grouper les résultats pour faire uniquement des --statistiques (note moyenne, prix le plus élevé …)


--Un requête SELECT peut devenir assez longue. Juste à titre informatif, voici une requête SELECT qui possède presque toutes les commandes possibles:


SELECT *FROM table WHERE condition GROUP BY expression HAVING condition { UNION | INTERSECT | EXCEPT } ORDER BY expression LIMIT count OFFSET start;

--A noter : cette requête imaginaire sert principale d’aide-mémoire pour savoir dans quel ordre sont utilisé chacun des commandes au sein d’une requête SELECT.

