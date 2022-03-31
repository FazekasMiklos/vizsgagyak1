<?php

session_start();

require 'db.inc.php';
require 'jelentkezesmodel.php';
$futo = new Jelentkezes;

include 'regisztraciok.php';
?>