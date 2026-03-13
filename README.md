# 学 Manabi Web

Application web PHP permettant aux élèves de consulter et réserver des cours de japonais.

> Client léger du projet Manabi — le client lourd (desktop) est dédié aux administrateurs et professeurs.

---

## Fonctionnalités

- Authentification par email / mot de passe
- Consultation de la liste des cours (niveau, description, professeur)
- Recherche de cours par titre, niveau ou professeur
- Visualisation des sessions disponibles pour chaque cours
- Réservation d'une session
- Consultation de ses réservations

---

## Stack technique

| Composant | Technologie |
|-----------|-------------|
| Frontend | HTML / CSS |
| Backend | PHP |
| Architecture | MVC (Model / View / Controller) |
| Base de données | MySQL / phpMyAdmin |
| Accès BDD | PDO avec requêtes préparées |
| Serveur | Apache (XAMPP en local / AlwaysData en prod) |

---

## Maquette

La maquette de l'application est disponible sur Figma :

[Voir la maquette Figma](https://www.figma.com/design/1C33Ic4tro5fD1D78Vx55T/Manabi?node-id=0-1&t=XY4ynPe2jwljuJsx-1)

---

## Démo en ligne

L'application est déployée et accessible à l'adresse suivante :

[manabi.alwaysdata.net](https://manabi.alwaysdata.net/)

Pour tester l'application, utilisez le compte élève suivant :
 
| Champ | Valeur |
|-------|--------|
| Email | lucas.martin@gmail.com |
| Mot de passe | eleve1234 |

---

## Structure du projet

```
manabi-web/
├── index.php
├── config/
│   ├── database.php
│   └── config.php
├── models/
│   ├── user.php
│   ├── cours.php
│   ├── session.php
│   └── reservation.php
├── controllers/
│   ├── login_controller.php
│   ├── logout_controller.php
│   ├── dashboard_controller.php
│   ├── cours_controller.php
│   └── reservation_controller.php
├── views/
│   ├── layout/
│   │   ├── header.php
│   │   └── footer.php
│   ├── login.php
│   ├── dashboard.php
│   ├── cours_list.php
│   ├── cours_detail.php
│   └── reservations.php
└── assets/
    ├── css/
    │   └── style.css
    └── images/
        └── logo.png
```
