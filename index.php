<?php
include ('p/header.php');
?>
  


<?php
require_once('functions/variaveis.php');
?>

<div class="conteudo">

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

echo '</div>';

//include ('p/home.php');











include ('p/footer.php');
?>

</div><!-- site -->
</body></html>