<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Form</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <form action="action.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" value="" name="password">
                    </div> 
                    <div class="form-group mt-2">
                        <button class="btn btn-success">Guardar</button>
                    </div> 
                </form>
            </div>
        </div>
    </main>
</body>
</html>