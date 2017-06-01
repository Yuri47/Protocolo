


<?php 
require_once('variaveis.php');


$name = $_POST['name'];
$lastName = $_POST['lastName'];
$login = $_POST['login'];
$mail = $_POST['mail'];
$password = $_POST['password'];


$query = "INSERT INTO `user` (`id`, `name`, `lastName`, `login`, `mail`, `password`) VALUES (NULL, '$name', '$lastName', '$login', '$mail', '$password');";

mysqli_query($dbc, $query) or die (mysqli_error($dbc));

 echo"<script language='javascript' type='text/javascript'>window.location.href='index.php';</script>";



?>