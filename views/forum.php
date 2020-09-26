<!-- J'inclus mon header -->
<?php
session_start();
include '../config.php'; 
include '../models/database.php';
include 'tables.php';
include '../models/forumModel.php';
include '../controllers/forumController.php';
include 'header.php'; 
?>
    <h1 class="text-center mt-5">Forum</h1>
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-md-3">
                <div class="my-5 ctn">
                    <p class="h4 pt-5 pb-3"><u>Navigation du Forum</u></p>
                    <ul class="forumMenu m-auto">
                        <!-- Nouveautés -->
                        <li class="nav-item dropdown my-5">
                            <a class="nav-link dropdown-toggle btn btn-secondary mr-5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nouveautés
                            </a>
                            <ul class="dropdown-menu bg-dark">
                                <!-- Appelle le tableau associatif -->
                                <?php foreach ($news as $newsTitle => $newsPage){
                                    ?><li class="nav-item dropdown-submenu">
                                        <a class="nav-link" href="<?= ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/') . $newsPage ?>" role="button">
                                            <?= $newsTitle ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <!-- Communautés -->
                        <li class="nav-item dropdown my-5">
                            <a class="nav-link dropdown-toggle btn btn-secondary mr-5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Communautés
                            </a>
                            <ul class="dropdown-menu bg-dark">
                                <!-- Appelle le tableau associatif -->
                                <?php foreach ($communities as $communitiesTitle => $communitiesPage){
                                    ?><li class="nav-item dropdown-submenu">
                                        <a class="nav-link" href="<?= ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/') . $communitiesPage ?>" role="button">
                                            <?= $communitiesTitle ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <!-- Retours et Bugs -->
                        <li class="nav-item dropdown my-5">
                            <a class="nav-link dropdown-toggle btn btn-secondary mr-5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Retours et Bugs
                            </a>
                            <ul class="dropdown-menu bg-dark">
                                <!-- Appelle le tableau associatif -->
                                <?php foreach ($returnAndBug as $returnAndBugTitle => $returnAndBugPage){
                                    ?><li class="nav-item dropdown-submenu">
                                        <a class="nav-link" href="<?= ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'views/' : '../views/') . $returnAndBugPage ?>" role="button">
                                            <?= $returnAndBugTitle ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="ctn my-5">
                    <p class="h2 my-5">Régles du Forum</p>
                    <ul>
                        <li>
                            <p>Le respect, pas d'insultes quelle qu'elles soient (Racisme, etc).</p>
                        </li>
                        <li>
                            <p>La courtoisie, il ne sert à rien d'agresser votre interlocuteur.</p>
                        </li>
                        <li>
                            <p>Consulter l'existant et respecter les sections afin d'éviter les doublons.</p>
                        </li>
                        <li class="mb-5">
                            <p>Éviter les messages inutiles, le forum sera plus lisible si cela est respecté </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<!-- J'inclus mon footer -->
<?php include 'footer.php' ?>