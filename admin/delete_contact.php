<?php
require_once "class/config.php";
 require_once "class/contact.class.php";
 $con  = new Contact();
 $con->id = $_GET['id'];
 $con->remove();
 ?>
