<?php

require __DIR__ . '/Entity/MovieEntity.php';
require __DIR__ . '/DataAccess/MovieDao.php';
require __DIR__ . '/DataAccess/MovieDaoJson.php';
require __DIR__ . '/Business/MovieBusiness.php';

$movieBusiness = new MovieBusiness;
$peliculas = $movieBusiness->listar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Películas</h1>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-8">
                <form id="form" action="index.php" method="GET">
                    <div class="form-group">
                        <label for="fecha"></label>
                        <select name="fecha" id="fecha" class="form-control">
                            <?php for($i=2012; $i<=2024; $i++): ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary" form="form" type="submit">Filtrar</button>
            </div>
        </div>
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
                        <?php foreach($peliculas as $pelicula): ?>
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
    </main>
</body>
</html>