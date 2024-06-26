<?php
require 'conn.php';

$stmt = $pdo->prepare('SELECT * FROM peliculas ORDER BY fecha_estreno DESC');
$stmt->execute();
$peliculas = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                                <th><?php echo $pelicula['titulo'] ?></th>
                                <th><?php echo $pelicula['rating'] ?></th>
                                <th><?php echo $pelicula['fecha_estreno'] ?></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>