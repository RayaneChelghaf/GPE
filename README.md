# GuardAI App - Protection contre les Discriminations de l'IA

## Description du Projet
GuardAI est un site vitrine dédié à l'analyse des systèmes d'intelligence artificielle. Il permet aux utilisateurs de détecter et de se prémunir contre les biais discriminatoires présents dans les IA, tout en offrant des solutions aux entreprises pour corriger leurs systèmes.

## Fonctionnalités
- Reporting d'analyse : Les utilisateurs peuvent consulter des rapports d'analyse détaillant les biais identifiés dans différents systèmes d'intelligence artificielle.
- Comparatif des notes d'IA : Comparer les systèmes d'IA en fonction de leurs notes sur différents critères de performance et d'équité.
- Demande d'analyse privée : Option permettant aux utilisateurs et aux entreprises de demander des analyses spécifiques sur des IA, avec un accès privilégié pour les entreprises.
- Abonnement payant : Intégration de Stripe pour la gestion des abonnements. Les abonnés peuvent soumettre leurs propres jeux de données pour tester les biais des IA.
- Page de conseils : Conseils pratiques sur la manière d'utiliser les IA de manière éthique et responsable.
- Gestion de profil : Système d'inscription et de connexion pour accéder à des fonctionnalités personnalisées.

## Technologies Utilisées
- Laravel 11 : Framework PHP utilisé pour la gestion du backend.
- Blade : Moteur de template utilisé pour la génération des vues côté serveur.
- Breeze : Package Laravel utilisé pour la gestion de l'authentification (connexion/inscription).
- MySQL : Base de données utilisée pour stocker les utilisateurs, les rapports d'analyses, les abonnements, etc.
- Stripe : Utilisé pour gérer les paiements des abonnements payants.

##  Prérequis
    Avant de commencer, assurez-vous d'avoir installé :

    - PHP >= 8.1
    - Composer
    - Node.js & npm
    - MySQL

## TODO Avant de Lancer l'Application
<<<<<<< HEAD
Avant de lancer l'application, veuillez vous assurer de :
- ( à remplir ) uihk
=======
- Installation
    Clonez le dépôt sur votre machine locale :
    git clone https://github.com/votre-utilisateur/guardai-app.git
    cd guardai-app

- Installez les dépendances PHP avec Composer :
    composer install

- Installez les dépendances JavaScript avec npm :
    npm install
    
- Copiez le fichier .env.example en .env et configurez les variables d'environnement (base de données, Stripe, etc.) :
    cp .env.example .env
    php artisan key:generate

- Mettez en place la base de données MySQL et exécutez les migrations :

    php artisan migrate
- Utilisation
Lancer le serveur Laravel :
    - php artisan serve
    - npm run dev
>>>>>>> 733c7c2b75661aeb25fff508fe33e614d62c8690
