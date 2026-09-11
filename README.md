[![Déploiement](https://github.com/JustineB24/limite-limite/actions/workflows/cd.yml/badge.svg)](https://github.com/JustineB24/limite-limite/actions/workflows/cd.yml)

[![CI](https://github.com/JustineB24/limite-limite/actions/workflows/ci.yml/badge.svg)](https://github.com/JustineB24/limite-limite/actions/workflows/ci.yml)

# Limite Limite - API

Projet réalisé par **Justine B.** et **Thibaut G.**

API PHP 8.2 connectée à une base de données relationnelle MySQL, entièrement conteneurisée avec Docker et intégrée dans une chaîne d'automatisation CI/CD via GitHub Actions.

---

## 📌 Présentation du projet

L'application expose un point d'entrée HTTP générant de manière aléatoire des associations de cartes (une question à trou et une réponse humoristique) au format JSON.

* **Backend** : PHP 8.2 en architecture MVC légère orientée objet.
* **Base de données** : MySQL 8.0 gérant le stockage des cartes questions et réponses.
* **Architecture applicative** : Injection de dépendances dans le contrôleur `LimiteLimite` facilitant l'isolation et les tests unitaires via des mocks.

---

## 🛠 Outils & Standards de développement

* **Conteneurisation** : Gestion des services `php` et `mysql` via Docker Compose avec montage de volumes applicatifs.
* **Gestion des dépendances** : Composer 2 pour la gestion des paquets de développement.
* **Qualité de code** : Respect strict du standard de programmation PSR-12 vérifié avec PHP_CodeSniffer.
* **Tests unitaires** : Suite de tests automatisée avec PHPUnit 11 validant la structure des données et l'intégrité des retours API.

---

## 🔄 Pipeline CI/CD (GitHub Actions)

L'automatisation repose sur deux workflows distincts gérant le cycle de vie du code :

### 1. Intégration Continue (CI)

Déclenchée à chaque modification (`push` ou `pull_request`) sur les branches `develop` et `prod` :

* Mise en place de l'environnement d'exécution PHP 8.2 et du cache Composer.
* Audit de sécurité automatisé des dépendances (`composer audit`).
* Analyse statique de conformité PSR-12 (`phpcs`).
* Exécution des tests unitaires (`phpunit`).

### 2. Déploiement Continu (CD)

Exécuté automatiquement en cas de succès du pipeline CI :

* **Environnement `develop`** : Déploiement SSH sur le VPS dans le répertoire cible `~/devapp` avec synchronisation de la branche `develop`.
* **Environnement `prod`** : Déploiement SSH sur le VPS dans le répertoire cible `~/prodapp` avec synchronisation de la branche `prod`.
* Reconstruction et redémarrage automatique des conteneurs applicatifs sur le serveur via `docker compose up -d --build`.
