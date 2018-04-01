<?php
require_once "class/config.php";
require_once "class/appointment.class.php";
$app = new Appointment();
$app->id = $_GET['id'];
$app->remove();
redirect('list_appointment.php');
?>
