<?php

require 'exceptions/DBNotFoundException.php';
require 'classes/User.php';
require 'exception_handler.php';

echo '<pre>';

$user = User::find($_GET['id']);
echo $user->email;
