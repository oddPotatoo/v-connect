<?php
require 'constant.php';

$connection = new mysqli(db_host, db_user, db_pass, db_name);

if (mysqli_errno($connection)){
    die(mysqli_error($connection));
}