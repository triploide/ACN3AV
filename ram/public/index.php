<?php

require '../vendor/autoload.php';

use Ram\Business\MovieBusiness;

$movieBusiness = new MovieBusiness;
$movies = $movieBusiness->all();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include __DIR__ . '/partials/head.php' ?>
        <title>Clean Blog - Start Bootstrap Theme</title>
        <meta name="description" content="" />
    </head>
    <body>
        <?php include __DIR__ . '/partials/nav.php' ?>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('/assets/img/living.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Rent a Movie</h1>
                            <span class="subheading">Lorem ipsum dolor sit amet consectetur</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php foreach ($movies as $movie): ?>
                        <!-- Post preview-->
                        <div class="post-preview">
                            <a href="post.html">
                                <h2 class="post-title"><?php echo $movie->getTitle() ; ?></h2>
                                <h3 class="post-subtitle"><?php echo $movie->getSubtitle() ; ?></h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!"><?php echo $movie->getOwner()->getFullName() ; ?></a>
                                on <?php echo $movie->since(); ?>
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php include __DIR__ . '/partials/footer.php' ?>

        <?php include __DIR__ . '/partials/scripts.php' ?>
    </body>
</html>
