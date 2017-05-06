<?php 
require_once  ('variaveis.php');

  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $password = $_POST['password'];
   

    if (isset($entrar)) {
            
      $query =  "SELECT * FROM user WHERE login = '$login' AND password = '$password'";
        $verifica = mysqli_query($dbc, $query) or die (mysqli_error($dbc));
        
        if (mysqli_num_rows($verifica)<=0){
           echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
          die();
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Logado com sucesso');window.location.href='../index.php';</script>";
          setcookie("sesao",$login, time() + (2 * 3600));
           
        }
    }













?>