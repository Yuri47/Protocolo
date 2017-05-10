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


 


$query = "DELETE FROM user WHERE id = $id  ";
    
$mysqli->query($query);

echo"<script language='javascript' type='text/javascript'>window.location.href='../index.php?p=usuario&msgEdit=apagar';</script>";





?>