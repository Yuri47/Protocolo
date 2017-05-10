<?php 
include ('variaveis.php');
session_start();
if(!isset($_SESSION['login'])){

    
header('location:../index.php');

}


$id = $_POST['id'];
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$mail = $_POST['mail'];
$login = $_POST['login'];
$password = $_POST['password'];


 


$query = "UPDATE user SET name = '$name', lastName = '$lastName', login = '$login', mail = '$mail', password = '$password' WHERE id = $id    ";
    
$mysqli->query($query);

echo"<script language='javascript' type='text/javascript'>window.location.href='../index.php?p=usuario&msgEdit=editar';</script>";





?>