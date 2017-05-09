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
<hr>

<?php 
    if (isset($_POST['view'])) {
?>
    <img src="arquivos/<?php  echo $_POST['fileName'];?>" height="200px"></img>

    <p>Enviar por Email</p>
    <form method="post" action="EnviarPorEmail">
        <input type="text" name="mail">
        <input type="file" value="arquivos/fil.jpg" enctype="multipart/form-data">

    </form>

<?php 
    }
?>        


<hr>
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
            <input type="submit" value="Visualizar" name="view">
        </form>
         
         
    </td>
    <td><a href="functions/deletarArquivo.php?id=<?php  echo $row['id'];?>&prt=<?php  echo $row['protocolo'];?>"  >Apagar</a></td>
     
     
  </tr>
    
    
    
    
<?php
       
              
}  
            

?>
</table>
<?php




  


?>






    
 












