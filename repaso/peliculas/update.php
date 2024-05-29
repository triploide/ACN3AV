<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Peli | Backoffice</title>
</head>
<body>
    <?php include __DIR__ . '/../partials/navbar.php'; ?>

    <main class="vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Peli</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group mt-3">
                            <label for="title">Título</label>
                            <input type="text" id="title" name="title" class="form-control" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="released_date">Fecha de estreno</label>
                            <input type="date" id="released_date" name="released_date" class="form-control" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="length">Duración</label>
                            <input type="text" id="length" name="length" class="form-control" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="rating">Rating</label>
                            <input type="text" id="rating" name="rating" class="form-control" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="genre">Género</label>
                            <input type="text" id="genre" name="genre" class="form-control" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="image">Imagen</label>
                            <input type="text" id="image" name="image" class="form-control" value="">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>