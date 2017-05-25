
<div class="home">
    <p class="pHome">Bem vindo ao Sistema de Protocolos JK</p>
    
    <?php
    
    
               
               if(isset($_SESSION['login'])){
  
     
                 
                   
             
} else {
                   
                   ?>
    
    
    
    
<div class="formCadastro">

    <p class="pCadastro">Cadastre-se</p>
    
<form method="POST" action="index.php?p=cadastro">
    <label for="name">Nome</label>
    <input type="text" name="name" required>
    
    <label for="lastName">Sobrenome</label>
    <input type="text" name="lastName" required>
    
     <label for="mail">Email</label>
    <input type="text" name="mail" required>
    
    <label for="lastName">Login</label>
    <input type="text" name="login" required>
      
    <label for="password">Senha</label>
    <input type="password" name="password" required>
    
    <input type="submit" value="Cadastrar" class="botao botaoSubmit">
</form>



</div>


<div class="formLogin">
<p class="pLogin">Já possui cadastro?<br> Entre com sua conta</p>
                       
            <form method="POST" action="functions/fazerLogin.php">
              
                <label for="login">Login ou Email</label>      
                <input type="text" name="login" required>
                <label for="password">Senha</label>      
                <input type="text" name="password" required>
                <input type="submit" value="Login" name="entrar" class="botao botaoSubmit">
                
              
            </form>
               </div>
              <?php
                   
                   
               }
               
               
    
?>
   
    
    </div>