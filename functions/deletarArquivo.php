<?php
include ('variaveis.php');
session_start();
if(!isset($_SESSION['login'])){

    
header('location:../index.php');

}

echo"<script language='javascript' type='text/javascript'>alert('Deseja apagar o arquivo?');window.location.href='../index.php?p=processos';</script>";

$id = $_GET['id'];
$protocolo = $_GET['prt'];

$query = "DELETE FROM file WHERE (id = '$id' AND protocolo = '$protocolo')";
    
$mysqli->query($query);

 

?>