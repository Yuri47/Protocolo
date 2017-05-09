<?php 
if(!isset($_SESSION['login'])){
    
header('location:index.php');

}


if (isset($_POST['view'])) {
    
    
      
    
    ?>
    
        <p><strong>Nome: </strong> <?php echo $_POST['name'].' '.$_POST['lastName'];?> </p>
        <p><strong>Email: </strong> <?php echo $_POST['mail'];?> </p>
        <p><strong>Login: </strong> <?php echo $_POST['login'];?> </p>
        <p><strong>Senha: </strong> <?php echo $_POST['password'];?> </p>

        <form method="post">
            
            <input type="hidden" name="name" value="<?php echo $_POST['name'];?>">
            <input type="hidden" name="lastName" value="<?php echo $_POST['lastName'];?>">
            <input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>">
            <input type="hidden" name="login" value="<?php echo $_POST['login'];?>">
            <input type="hidden" name="password" value="<?php echo $_POST['password'];?>">
            <input type="submit" value="Editar" name="edit">
            
            
        </form>

    <?php
}





$results = $mysqli->query("SELECT * FROM user");


?>        


<hr>
<table>
    
  <tr>
    <th>Nome</th>
    <th>Sobrenome</th> 
    <th>Email</th> 
    <th>Visualizar</th>
     
     
      
  </tr>
    
    
<?php

while($row = $results->fetch_assoc()) { 


          ?>

     <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['lastName'];?></td>
    <td><?php echo $row['mail'];?></td>
     
    <td><form method="post" >
        
        <input type="hidden" name="name" value="<?php echo $row['name'];?>">
        <input type="hidden" name="lastName" value="<?php echo $row['lastName'];?>">
        <input type="hidden" name="mail" value="<?php echo $row['mail'];?>">
        <input type="hidden" name="login" value="<?php echo $row['login'];?>">
        <input type="hidden" name="password" value="<?php echo $row['password'];?>">
        <input type="submit" value="Visualizar" name="view">
        
        
        </form></td>
     
     
  </tr>
    
    
    
    
<?php


}
?>
    
    
</table>