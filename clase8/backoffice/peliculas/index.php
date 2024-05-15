<?php
require __DIR__ . '/../dataAccess/Dao.php';
require __DIR__ . '/../dataAccess/MovieDao.php';
require __DIR__ . '/../business/Business.php';
require __DIR__ . '/../business/MovieBusiness.php';

$movieBusiness = new MovieBusiness;
$movies = $movieBusiness->all();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Películas | Backoffice</title>
</head>
<body>
    <?php include __DIR__ . '/../partials/navbar.php'; ?>

    <main class="vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Películas</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-border table-striped">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Fecha de estreno</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($movies as $movie): ?>
                                <tr>
                                    <td><?php echo $movie->title; ?></td>
                                    <td><?php echo $movie->released_date; ?></td>
                                    <td>
                                        <a href="form.php?id=<?php echo $movie->id; ?>" class="btn btn-primary">
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>