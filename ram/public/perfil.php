<?php

use Ram\Business\AuthBusiness;

require '../vendor/autoload.php';

$user = AuthBusiness::verify();

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include __DIR__ . '/partials/head.php' ?>
        <title>Perfil | RAM</title>
        <meta name="description" content="" />
    </head>
    <body>
        <?php include __DIR__ . '/partials/nav.php' ?>

        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-info">
                <p><?php echo $_SESSION['message']; ?></p>
            </div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

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
        <div class="container px-4 px-lg-5" style="min-height: 80vh;">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h1><?php echo $user->getFullName(); ?></h1>
                </div>
            </div>
        </div>

        <?php include __DIR__ . '/partials/footer.php' ?>

        <?php include __DIR__ . '/partials/scripts.php' ?>
    </body>
</html>
