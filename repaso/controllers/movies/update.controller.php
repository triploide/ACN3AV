<?php

require '../../app/DataAccess/MovieDao.php';
require '../../app/Business/MovieBusiness.php';
$movieBusiness = new MovieBusiness;
$movieBusiness->update($_POST['id'], $_POST);

header('location: ../../peliculas');