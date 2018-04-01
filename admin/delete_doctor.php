<?php
require_once "class/config.php";
 require_once "class/doctor.class.php";
 $doc  = new Doctor();
 $doc->id = $_GET['id'];
$doc->remove();


 ?>
