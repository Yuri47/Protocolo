<!DOCTYPE html>
<html lang="pt-BR">
<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>
			
	<?php @$p = $_GET['p'];
	if (empty ($p)){
	$p = 'home';	
}	


else {
		$pagina = $p;
}

$pageName;

if ($p == "home") {
  $pageName = "JK";
} else if ($p == "about") {
  $pageName = "Sobre Nós";
} else if ($p == "contact") {
  $pageName = "Contato";
} else if ($p == "services") {
  $pageName = "Serviços";
} else if (!empty($p)) {
  $pageName = $p;
}



echo $pageName; 



?>




		</title>

<?php
require_once('functions/variaveis.php');
?>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="estilo/estilo.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<!-- GLOBAL STYLES-->
		<link href="bootstrap/css/global-style.css" rel="stylesheet">


		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="../assets/js/html5shiv.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
    <link rel="shortcut icon" href="bootstrap/img/favicon.ico">

	



	</head>
    <body>
 <div class="site">

        
        
        
        
        

	<!-- NAVBAR
    ================================================== -->
    

        <div class="containerTop">
          <div class="logo">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
             <img src="arquivos/alppa.png">
                            
              <?php
                session_start();
?>
     </div><!-- /.navbar-inner -->
              
              
              
              
              
              
              
             <div class="divMenu">
            <nav>
            <div class="menu">
              <ul class="nav">
               
                <li class=""><a href="<?php echo $home ?>">Home</a></li>
                <li class=""><a href="<?php echo $home.'?p=processos' ?>">Processos</a></li>
                <li class=""><a href="<?php echo $home.'?p=usuario' ?>">Usuário</a></li>
                <li class=""><a href="<?php echo $home.'?p=contact' ?>">Contato</a></li>
                  
                    <?php
                           if(isset($_SESSION['login'])){
     
     
                   ?>
                  
                <li class=""><a href="functions/fazerLogout.php">Sair</a></li>
              <?php } ?>
                  
              </ul>
            </div><!--/.menu -->
            </nav>   
                 <div>
                     <?php
                           if(isset($_SESSION['login'])){
     
     
                   ?>
                     
                     <div class="bemvindo">Seja Bem Vindo <?php echo $_SESSION['name'].' '.$_SESSION['lastName']; ?></div>
                     
                     <?php
                   
              
}
                                ?>
                 </div>
                 
              </div>
              

             
              
              
          
        </div><!-- /.navbar -->
<hr>
      
 