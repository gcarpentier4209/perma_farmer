# PERMA FARMER
![A9DEV](A9DEV.png)

Yannik Guillodo, 
Mattéo Moisan, 
Mizuho Toxé, 
Geoffrey Carpentier

# Etat des lieux du travail réalisé
fonctionnalitées mise en place:
 site vitrine
 enregistrement client
 login/logout 
 interface admin => gestion des produits (crud) , gestion des stocks (crud),   préparation des commandes client(partiel)
 interface client => choix de la formule, historique des commandes


# Getting started

Find in the Conception folder the MCD and Mockups of the application.

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/6.x/installation)


Clone the repository

    git clone git@github.com:gcarpentier4209/perma_farmer.git

Switch to the repo folder

    cd perma_farmer

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate


You can now access the server at http://localhost:8000

    
**Make sure you set the correct database connection information before running the migrations** 

    php artisan migrate


**Populate the database with seed data with relationships which includes users, articles, comments, tags, favorites and follows. This can help you to quickly start testing the api or couple a frontend and start using it with ready content.**

Run the database seeder and you're done

    php artisan db:seed
    
Your are an Admin account example with :
    
    admin@fake.com
    password


    

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh --seed
    




