<?php 
require_once  ('variaveis.php');

  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $password = $_POST['password'];
   session_start();

    if (isset($entrar)) {
            
         
        $results = $mysqli->query("SELECT * FROM user WHERE login = '$login' AND password = '$password'");
         
        
        if (mysqli_num_rows($results)<=0){
           echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
          die();
        }else{
          
            while($row = $results->fetch_assoc()) {
    
                    
            $_SESSION['login'] = $row['login'];
            $_SESSION['id'] = $row['id'];
                
            //libera a memoria com os dados da consulta
            $results->free();

            // Fecha a conexão 
            $mysqli->close();
                
                echo"<script language='javascript' type='text/javascript'>alert('Logado com sucesso');window.location.href='../index.php';</script>";
}  
            
            
            
        }
    }













?>