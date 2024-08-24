<h2>Cadastre um novo Produto</h2>
<?php
// Include the class definition
$id = $_GET["id"];

require_once('class/estoqueClass.php');

$estoque = new estoqueClass ($id); // Instantiate a cliente object

if(isset ($_POST['nomeProduto'])){

    $nomeProduto                  =$_POST['nomeProduto'];
    $tipoProduto                   =$_POST['tipoProduto'];
    $configuracaoProduto                  =$_POST['configuracaoProduto'];
    $quantidadeEstoque                 =$_POST['quantidadeEstoque'];
    $valorDiaria                 =$_POST['valorDiaria'];
    $statusEstoque              =$_POST['statusEstoque'];
   
    
    //METODO RESPONSAVEL DE PASSA AS INFORMAÇÕES DA CLASSE
   
    $estoque -> nomeProduto = $nomeProduto;
    $estoque -> tipoProduto = $tipoProduto;
    $estoque -> configuracaoProduto = $configuracaoProduto;
    $estoque-> quantidadeEstoque = $quantidadeEstoque;
    $estoque-> valorDiaria = $valorDiaria ;
    $estoque-> statusEstoque= $statusEstoque;
  

    $estoque -> Atualizar();
}
?>

<section>
<form class="formulario-CAD" action="index.php?p=estoque&e=atualizar&id=<?php echo isset($estoque->idEstoque) ?>" method="POST" enctype="multipart/form-data">



<div class="formulario-Cadastrar">
     


     <div class="nomeCad">
         <label for="nomeProduto" class="form-label">Nome Produto:</label>
         <input type="text" class="form" name="nomeProduto" id="nomeProduto" require 
         value="<?php echo $estoque->nomeProduto; ?>" placeholder="Nome do Produto">
     </div>

     <div class="nomeCad">
         <label for="tipoProduto" class="form-label">Tipo do Produto:</label>
         <input type="text" class="form" name="tipoProduto" id="tipoProduto" require 
         value="<?php echo $estoque->tipoProduto; ?>" placeholder="Tipo de Produto">
     </div>

     
     <div class="nomeCad">
         <label for="configuracaoProduto" class="form-label">Configuração do Produto:</label>
         <input type="text" class="form" name="configuracaoProduto" id="configuracaoProduto" require 
         value="<?php echo $estoque->configuracaoProduto; ?>" placeholder="Configuração do Produto">
     </div>

     
     <div class="nomeCad">
         <label for="quantidadeEstoque" class="form-label">Quantidade do Estoque:</label>
         <input type="number" class="form" name="quantidadeEstoque" id="quantidadeEstoque" require 
         value="<?php echo $estoque->quantidadeEstoque; ?>"
         placeholder="Quantidade do Estoque">
     </div>

     
     <div class="nomeCad">
         <label for="valorDiaria" class="form-label">Valor da Diaria:</label>
         <input type="number" class="form" name="valorDiaria" id="valorDiaria" require 
         value="<?php echo $estoque->valorDiaria; ?>"
         placeholder="Valor da Diaria">
     </div>
     
 
     
     <div class="statusEstoque">
         <label for="statusEstoque" class="form-label" name="statusEstoque" id="statusEstoque" require>
             Status  Estoque</label>
         <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

         <select id="inputState" class="form-control" name="statusEstoque" id="statusEstoque">
             <option selected>Status</option>
             <option>ATIVO</option>
             <option>INATIVO</option>
             <option>DESATIVADO</option>
             
         </select>
     </div>

     <div class="BTN">
            <button type="submit" class="btn btn-primary">Atualizar Cadastro</button>
        </div>

 </div>



</form>

</section>