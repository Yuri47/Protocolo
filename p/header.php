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
  $pageName = "Macromix Informática";
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
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
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

 


	<!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar navbar-fixed-top">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?php echo $home ?>">
                <img alt="Brand" src="bootstrap/img/favicon.png">
                 
              </a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
               
                <li class=""><a href="<?php echo $home ?>">Home</a></li>
                <li class=""><a href="<?php echo $home.'?p=processos' ?>">Processos</a></li>
                <li class=""><a href="<?php echo $home.'?p=usuario' ?>">Usuário</a></li>
                <li class=""><a href="<?php echo $home.'?p=contact' ?>">Contato</a></li>
              
              </ul>
            </div><!--/.nav-collapse -->
              
              
              
              
              <?php
    session_start();
    
               
               if(isset($_SESSION['login'])){
    echo $_SESSION['login'];
     
                   
                   
             echo       ' <a href="functions/fazerLogout.php"><button>Logout</button></a>';
} else {
                   
                   ?>
                       
            <form method="POST" action="functions/fazerLogin.php">
              
                <label for="login">Login ou Email</label>      
                <input type="text" name="login">
                <label for="password">Senha</label>      
                <input type="text" name="password">
                <input type="submit" value="Login" name="entrar">
                
              
            </form>
              
              <?php
                   
                   
               }
               
               
    
?>
     
             
              
              
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
<hr>