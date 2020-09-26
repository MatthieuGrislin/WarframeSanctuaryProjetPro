<?php
session_start();
include 'controllers/indexController.php';
include 'views/header.php'; ?>

    <!-- Début du texte d'accueil -->
    <div class="container text-center mb-5 ctn mt-5">
        <h1 class="mt-5 mb-5">Bienvenue sur Warframe Sanctuary</h1>
        <p>Un site où vous trouverez toutes les informations relatives au jeu, que ce soit une localisation de ressource,
            l'obtention et la fabrication d'une arme, ou encore la solution d'une quête.
        </p> 
        <p>Le site étant encore en construction toutes les informations ne sont pas encore disponibles.</p>       
        <h2 class="mt-5 mb-5">Qui sommes-nous ?</h2>
        <p>Passionné par le jeu depuis sa sortie, nous avons envi d'aider les nouveaux joueurs comme les plus expérimentés.</p>
        <p>Nous avons donc décidé de créer Warframe Sanctuary.</p>
        <p>En effet la plupart des informations relatives aux nouvelles mises à jour, ne sont disponible quand anglais, nous voulons donc rendre ces informations disponibles aux personnes ne parlant pas cette langue.</p>
        <p class="mb-5">De plus il est souvent nécessaire d'allez sur plusieurs sites pour trouver son bonheur, c'est pourquoi nous allons tout faire pour rassembler tous les outils utiles, que ce soit un forum, un hôtel de vente/achat ou bien encore les horaires des missions.</p>
    </div>
    <!-- Fin du texte d'accueil -->
<!-- J'inclus mon footer -->
<?php include 'views/footer.php' ?>