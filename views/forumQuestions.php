<!-- J'inclus mon header -->
<?php
session_start();
include '../config.php'; 
include '../models/database.php';
include 'tables.php';
include '../models/forumModel.php';
include '../models/forumQuestionModel.php';
include '../controllers/forumQuestionsController.php';
include 'header.php'; 
?>  
    <?php if(isset($_SESSION['profile'])){ ?>
    <h1 class="text-center mt-5"><?= $subCategoriesName->subCatName ?></h1>
    <div class="container-fluid">
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
                                <?php foreach ($returnAndBug as $returnAndBugTitle => $returnAndBugPage){ ?>
                                    <li class="nav-item dropdown-submenu">
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
            <div class="col-12 col-md-6">
                <div class=" my-5">
                    <?php foreach($showQuestions as $questions) { ?>
                        <div class="mb-3 text-center ctn p-4">
                            <a href="questionForum.php?id=<?= $questions->id ?>" class="text-white"><?= $questions->title ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="ctn my-5">
                    <ul class="forumMenu m-auto">
                        <li>
                            <a class="btn btn-secondary mr-5 mt-5 py-3 px-5" href="insertForumQuestions.php?idSubCat=<?= isset($_GET['idSubCat']) ? $_GET['idSubCat'] : '' ?>" role="button">
                                Poser votre question
                            </a>
                        </li>
                        <li>
                            <button class="btn btn-secondary mr-5 my-5 py-3 px-5 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Vos Posts
                            </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="usersPostQuestion.php?id=<?= isset($_SESSION['profile']['id']) ? $_SESSION['profile']['id'] : '' ?>">Vos Questions</a>
                                <a class="dropdown-item" href="usersPostResponse.php?id=<?= isset($_SESSION['profile']['id']) ? $_SESSION['profile']['id'] : '' ?>">Vos réponses</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php }else { ?>
        <h1 class="text-center mt-5">Accès au Forum</h1>
        <div class="container ctn m-5 mx-auto">
            <h2 class="m-5">Pour accéder accéder au forum, vous devez être inscrit et connectés</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 ctn text-center mb-5 mx-auto">
                    <p class="h4 mt-5">Si vous voulez vous inscrire c'est ici</p>
                    <a href="register.php" class=" btn btn-secondary m-4">Inscription</a>
                </div>
                <div class="col-12 col-md-5 ctn text-center mb-5 mx-auto">
                    <p class="h4 mt-5">Si vous voulez vous connecter c'est ici</p>
                    <a href="login.php" class=" btn btn-secondary m-4">Connexion</a>
                </div>
            </div>
        </div>
    <?php } ?>
<!-- J'inclus mon footer -->
<?php include 'footer.php' ?>