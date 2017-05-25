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

		 
		<link href="estilo/estilo.css" rel="stylesheet">
		 
		 
		 

 
    <link rel="shortcut icon" href="bootstrap/img/favicon.ico">

	



	</head>
    <body>
 <div class="site">

        
        
        
        
        

 

        <div class="containerTop">
          <div class="logo">
             
             <img src="arquivos/alppa.png">
                            
              <?php
                session_start();
?>
     </div> 
              
              
              
              
              
              
              
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
      
 