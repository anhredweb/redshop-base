<?php
use redObject\User;

include 'autoload.inc.php';

$user = User::getUser();

echo '<pre>';
var_dump($user);