<?php

require '../../app/DataAccess/MovieDao.php';
require '../../app/Business/MovieBusiness.php';
$movieBusiness = new MovieBusiness;
$movieBusiness->delete($_POST['id']);

header('location: ../../peliculas');