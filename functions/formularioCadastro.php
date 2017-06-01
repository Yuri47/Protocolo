
<div class="home">
    <p class="pHome">Bem vindo ao Sistema de Protocolos JK</p>
    
    <?php
    
    
               
               if(isset($_SESSION['login'])){
  
     
                 
                   
             
} else {
                   
                   ?>
    
    
    
    



<div class="formLogin log">
<p class="pLogin">Login</p>
                       
            <form method="POST" action="functions/fazerLogin.php">
              
                <label for="login">Login ou Email</label>      
                <input type="text" name="login" required>
                <label for="password">Senha</label>      
                <input type="text" name="password" required>
                <input type="submit" value="Login" name="entrar" class="botao botaoSubmit botaoLog">
                
              
            </form>
    
    <a href="?p=fazerCadastro"><button class="botaoCadastrar botao">Cadastrar</button></a>
    
    
    
               </div>
    
    
    
  
    
    
              <?php
                   
                   
               }
               
               
    
?>
   
    
    </div>