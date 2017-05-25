<?php 
 
$home		= 'index.php'; 
$author		= 'Lucas Popolin';
$telefone   = '(61) 9 9149-8362';
$endereco   = 'Rua tal';
 
$dbc 		= mysqli_connect('localhost', 'root', '', 'protocolo')
		or die (Impossível); 
$mysqli = new mysqli('localhost', 'root', '', 'protocolo');

    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
?>	