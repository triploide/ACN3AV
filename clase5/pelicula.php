<?php
require __DIR__ . '/consultas/pelicula-por-id.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pelicula->titulo; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $pelicula->titulo; ?></h1>
            </div>
        </div>
    </main>
</body>
</html>