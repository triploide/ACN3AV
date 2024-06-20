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
                    <form action="controllers/change-password.php" method="POST">
                        <div class="form-group mt-3">
                            <label for="password">Contraseña Actual</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="new_password">Contraseña Nueva</label>
                            <input type="password" name="new_password" id="new_password" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="new_password_confirmation">Confirmar Contraseña</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-pimary" name="submit">Confirmar Contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include __DIR__ . '/partials/footer.php' ?>

        <?php include __DIR__ . '/partials/scripts.php' ?>
    </body>
</html>
