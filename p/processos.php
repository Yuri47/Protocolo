<?php 
//session_start();
//esse código verifica se o usuário está logado. Se tiver a página é liberada para ele acessar. Se não tiver logado ele será 
//redirecionado para a página inicial.
if(!isset($_SESSION['login'])){
    
header('location:index.php');

}

?>







<form method="post" action="index.php?p=processos" enctype="multipart/form-data">
  <label>Arquivo</label>
  <input type="file" name="arquivo" />
  
  <input type="submit" value="Enviar" name="proc"/>
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
    <td><a href="arquivos/<?php  echo $row['fileName'];?>" target="_blank">Visualizar</a></td>
    <td><a href="functions/deletarArquivo.php?id=<?php  echo $row['id'];?>&prt=<?php  echo $row['protocolo'];?>"  >Apagar</a></td>
     
  </tr>
    
    
    
    
<?php
       
              
}  
            

?>
</table>
<?php




  


?>






    
 












