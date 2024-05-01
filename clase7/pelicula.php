<?php

require __DIR__ . '/Entity/MovieEntity.php';
require __DIR__ . '/DataAccess/Dao.php';
require __DIR__ . '/DataAccess/MovieDaoMySQL.php';
require __DIR__ . '/DataAccess/MovieDaoJson.php';
require __DIR__ . '/Business/MovieBusiness.php';

$movieBusiness = new MovieBusiness;
$pelicula = $movieBusiness->find($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pelicula->getTitulo(); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $pelicula->getTitulo(); ?></h1>
            </div>
        </div>
    </main>
</body>
</html>