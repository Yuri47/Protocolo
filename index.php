<?php
include ('p/header.php');
?>
  <body>


<?php
require_once('functions/variaveis.php');
?>


<?php
@$p = $_GET['p'];


if (empty ($p)){
	$pagina = 'home';	
}	else {
		$pagina = $p;
}
if(!file_exists('p/'.$pagina.'.php')) {
	$pagina = '404 Error';	
	
}


if(file_exists('p/'.$pagina.'.php')) {
		  include("p/$pagina.php");
	  }	else	{
		  //echo '<img src="imagens/404.jpg" />';
		  include ('p/404.php');
	  }



//include ('p/home.php');











include ('p/footer.php');
?>


</body></html>