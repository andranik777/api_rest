1)

GET → permet d'accèder à une ressource (liste ou élément) ou appelle une fonction

POST → Ajoute une ressource ou exécute une action

PUT → Met à jour une ressource complète en la remplaçant par une nouvelle version (nécessite de renseigner toutes les propriétés de la ressource)

PATCH → Met à jour une partie d’une ressource en envoyant le différentiel (nécessite de renseigner uniquement les propriétés à modifier)

DELETE → Supprime une ressource 

HEAD => Equivalent au GET sauf qu’aucune ressource n’est retournée, HEAD sera utiliser afin de savoir si une ressource est accessible sans la retourner au client

2)

La requête HTTP est composé de : 

- Une url : Le serveur envoie le fichier test. La requête GET peut recevoir des informations supplémentaires que le serveur Web doit traiter. Ces paramètres d’URL sont simplement ajoutés à l’URL
- Des headers : comprends par exemple un pararmetre accept qui indique le type de contenu (de média) que le client est en mesure d’accepter.
- Une méthode (Verbe HTTP): HTTP signifie (Hypertext Transfer Protocol), il s’agit d’un protocole de communication entre ordinateurs connectés au réseau internet
- Un body (Optionnel): utiliser notamment durant des requettes type POST PUT  PATCH  pour créer ou mettre à jour des donées.

3) La réponse HTTP est composé de :

- Est renvoyé par le serveur WEB
- Contient des headers :
    
     comprends par exemple un pararmetre accept qui indique le type de contenu (de média) que le client est en mesure d’accepter.
    
- Contient un body (html, xml, json ...)
    
          Un body (Optionnel): utiliser notamment durant des requettes type POST PUT      PATCH  pour créer ou mettre à jour des donées.
    
- Contient un code statut (404, 500, 301 ...)

**Les différents codes HTTP**

**Commençant par 2 **

Succès
Exemple :
- 200 Ok
-201 Created
-202 Accepted
-...

**Commençant par 3 **

Redirection
Exemple :
- 301 Redirection temporaire
- 310 Trop de redirection
- 304 Non modifié
-...

**Commençant par 4 **

Erreur du client
Exemple :
- 400 Mauvaise requête
- 401 Problème d’autorisation
- 404 Ressource non trouvée
-...

**Commençant par 5 **

Erreur du Serveur
Exemple :
- 500 Erreur interne du serveur
- 501 Fonctionalité pas implémentée
- 503 Service non disponible
