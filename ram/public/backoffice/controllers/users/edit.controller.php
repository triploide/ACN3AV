<?php

use Ram\Business\UserBusiness;

require '../../../../vendor/autoload.php';

$id = $_POST['id'];
$data = $_POST;

$userBusiness = new UserBusiness;
$userBusiness->update($id, $data);
