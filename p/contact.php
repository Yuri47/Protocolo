<?php 
if(!isset($_SESSION['login'])){
    
header('location:index.php');

}


 

    if(isset($_GET['msgEdit'])) {
        if ($_GET['msgEdit'] == 'editar') {
            echo "Informações Editadas.";
        } else if ($_GET['msgEdit'] == 'apagar') {
            echo "Usuário deletado com sucesso.";
        }
        
    }  

 

?>








<div class="contato">
<h1>Sistema de Protocolos JK - 2017</h1>
<p>Desenvolvido por <?php echo $author ?></p>
<p>Fone: <?php echo $telefone ?></p>
<p>Endereço: <?php echo $endereco ?></p>

</div>












