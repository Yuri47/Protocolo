<?php 
//session_start();
//esse código verifica se o usuário está logado. Se tiver a página é liberada para ele acessar. Se não tiver logado ele será 
//redirecionado para a página inicial.
if(!isset($_SESSION['login'])){
    
header('location:index.php');

}

?>







<form class="formArquivo" method="post" action="index.php?p=processos" enctype="multipart/form-data">
   
  <input type="file" name="arquivo" class="  botaoArquivo" required/>
  
  <input type="submit" value="Enviar" name="proc" class="botao"/>
</form>

<?php 

 $id = $_SESSION['id'];
if (isset ($_POST['proc'])) {
    include ('functions/upload.php');
    
    
   
    
    $query = "INSERT INTO file (idUser, protocolo, fileName) VALUES ('$id', '$protocolo', '$nome_final')";
    
    $mysqli->query($query);
    
      

            // Fecha a conexão 
          //  $mysqli->close();
                
      
    
}


    $results = $mysqli->query("SELECT * FROM file WHERE idUser = '$id'");

?>


<?php 
    if (isset($_POST['view'])) {
    require_once('functions/PHPMailer/class.phpmailer.php');   
        
?>

    <img src="arquivos/<?php  echo $_POST['fileName'];?>" height="200px" class="imgProcesso"></img>
<p> <a target="_black" href="arquivos/<?php  echo $_POST['fileName'];?>">Clique aqui para acessar o arquivo</a></p>
<div class="formCadastro home">
    <p class="pCadastro">Enviar por Email</p>
    <form method="post" action="">
        <label for="mail">Digite o Email de destino</label>
        <input type="text" name="mail" required>
        <label for="mail">Assunto</label>
        <input type="text" name="subject" required>
        <label for="mail">Mensagem</label>
        <input type="text" name="message" required>
        <input type="hidden" name="fileName" value="<?php  echo $_POST['fileName'];?>">
        <input type="hidden" name="protocolo" value="<?php  echo $_POST['protocolo'];?>">
        
        
        <input type="submit" value="Enviar" name="sendMail">
        

    </form>
    </div>
<?php
    }
?>        


<?php 
        if (isset($_POST['sendMail'])) {
        require_once('functions/PHPMailer/class.phpmailer.php');  
            
        $myMail = $_SESSION['mail'];
        $name = $_SESSION['name'].' '.$_SESSION['lastName'];
        $destinyMail = $_POST['mail'];
        $subject = $_POST['subject'];
        $protocolo = $_POST['protocolo'];
        $message = $_POST['message'].'\n Protocolo da imagem: '. $protocolo;
        $file = $_POST['fileName'];
        
        
        
        
        $email = new PHPMailer();
        $email->From      = $myMail;
        $email->FromName  = $name;
        $email->Subject   = $subject;
        $email->Body      = $message;
        $email->AddAddress( $destinyMail ); 
        
        $file_to_attach = 'arquivos/'.$file;
        $email->AddAttachment( $file_to_attach , $file );
        
        if ($email->Send()) {
            echo "Mensagem Enviada!";
        } else {
            echo "Mensagem Não Enviada!";
        }
    }
?>        



<div class="tabela">
<table>
    
  <tr>
    <th>Protocolo</th>
    <th>Nome do Arquivo</th> 
    <th>Visualizar</th>
    <th>Apagar</th>
     
      
  </tr>
    
    
<?php

     while($row = $results->fetch_assoc()) {
    
         
                    
          ?>

     <tr>
    <td><?php echo $row['protocolo'];?></td>
    <td><?php echo $row['fileName'];?></td>
    <td>
        
        
        <form method="post">
            <input type="hidden" name="fileName" value="<?php  echo $row['fileName'];?>">
            <input type="hidden" name="protocolo" value="<?php  echo $row['protocolo'];?>">
            <input type="submit" value="Visualizar" name="view" class="botao ">
        </form>
         
         
    </td>
    <td><a class="botao" href="functions/deletarArquivo.php?id=<?php  echo $row['id'];?>&prt=<?php  echo $row['protocolo'];?>&file=<?php  echo $row['fileName'];?>"  >Apagar</a></td>
     
     
  </tr>
    
    
    
    
<?php
       
              
}  
            

?>
</table>
    </div>
<?php




  


?>






    
 












