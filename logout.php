<?php 
require 'config/constant.php';

session_destroy();
header('location: ' . ROOT_URL);
die();