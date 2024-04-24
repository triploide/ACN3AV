<?php

require __DIR__ . '/../../Entity/MovieEntity.php';
require __DIR__ . '/../../DataAccess/MovieDao.php';
require __DIR__ . '/../../DataAccess/MovieDaoJson.php';
require __DIR__ . '/../../Business/MovieBusiness.php';

$movieBusiness = new MovieBusiness;
$peliculas = $movieBusiness->listar();
?>

<!DOCTYPE html>
<html lang="es">
<?php $title = 'Blank'; ?>
<?php include __DIR__ . '/../partials/head.php'; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include __DIR__ . '/../partials/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include __DIR__ . '/../partials/topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>

                    <div class="row m-t3">
                        <div class="col-md-12">
                            <table class="table table-striped table-border">
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Rating</th>
                                        <th>Fecha de estreno</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($peliculas as $pelicula) : ?>
                                        <tr>
                                            <!-- pelicula.php?id=N -->
                                            <th>
                                                <a href="pelicula.php?id=<?php echo $pelicula->getId(); ?>"><?php echo $pelicula->getTitulo() ?></a>
                                            </th>
                                            <th><?php echo $pelicula->getRating() ?></th>
                                            <th><?php echo $pelicula->getEstrenoParaHumanos() ?></th>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include __DIR__ . '/../partials/footer.php'; ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include __DIR__ . '/../partials/logout-modal.php'; ?>

    <?php include __DIR__ . '/../partials/scripts.php'; ?>

</body>

</html>