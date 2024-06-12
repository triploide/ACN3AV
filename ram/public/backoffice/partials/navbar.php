<?php use Ram\Business\AuthBusiness; ?>

<head>
    <nav class="navbar navbar-expand-lg bg-dark"  data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/backoffice/peliculas">Películas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/backoffice/usuarios">Usuarios</a>
                    </li>
                    <?php if(AuthBusiness::check()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/backoffice/logout.php">Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</head>