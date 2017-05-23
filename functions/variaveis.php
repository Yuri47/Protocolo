<?php 
 
$home		= 'index.php'; 
$author		= 'Yuri Alexsander';
$telefone   = '(61) 9 9999-8888';
$endereco   = 'Rua tal';
 
$dbc 		= mysqli_connect('localhost', 'root', '', 'protocolo')
		or die (Impossível); 
$mysqli = new mysqli('localhost', 'root', '', 'protocolo');

    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
?>	