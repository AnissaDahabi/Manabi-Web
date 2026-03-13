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

## Structure du projet

```
manabi-web/
├── index.php
├── config/
│   ├── database.php
│   └── config.php
├── models/
│   ├── User.php
│   ├── Cours.php
│   ├── Session.php
│   └── Reservation.php
├── controllers/
│   ├── LoginController.php
│   ├── LogoutController.php
│   ├── DashboardController.php
│   ├── CoursController.php
│   └── ReservationController.php
├── views/
│   ├── layout/
│   │   ├── header.php
│   │   └── footer.php
│   ├── login.php
│   ├── dashboard.php
│   ├── cours_list.php
│   ├── cours_detail.php
│   └── reservations.php
└── public/
    └── css/
        └── style.css
```
