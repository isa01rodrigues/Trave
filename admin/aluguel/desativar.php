<h2>Página Desativar</h2>
<?php
require_once('class/aluguelClass.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $aluguel = new aluguelClass();
    $aluguel->idAluguel = $id;
    $aluguel->desativar();
}

if(isset($_POST['tipoAluguel'])) {
    $tipoAluguel         = $_POST['tipoAluguel'];
    $nomePlano           = $_POST['nomePlano'];
    $nomePlanoAdicional  = $_POST['nomePlanoAdicional'];
    $perifericoAdc       = $_POST['perifericoAdc'];
    $precoAluguel        = $_POST['precoAluguel'];
    $dataSaidaProd       = $_POST['dataSaidaProd'];
    $dataRetornoProd     = $_POST['dataRetornoProd'];
    $idCliente           = $_POST['idCliente'];
    $idFuncionario       = $_POST['idFuncionario'];
    $statusAluguel       = $_POST['statusAluguel'];
   
    /******************************************** */


    $aluguel -> tipoAluguel = $tipoAluguel;
    $aluguel -> nomePlano = $nomePlano;
    $aluguel -> nomePlanoAdicional = $nomePlanoAdicional;
    $aluguel-> perifericoAdc = $perifericoAdc;
    $aluguel-> precoAluguel =$precoAluguel;
    $aluguel-> dataSaidaProd = $dataSaidaProd;
    $aluguel-> dataRetornoProd = $dataRetornoProd;
    $aluguel ->idCliente = $idCliente;
    $aluguel-> idFuncionario = $idFuncionario;
    $aluguel-> statusAluguel = $statusAluguel;

    $aluguel->desativar();
}
?>

<section>
<form class="formulario-CAD" action="index.php?p=aluguel&a=desativarr$id=<?php echo $aluguel->idAluguel ?>" method="POST" enctype="multipart/form-data">

    <div class="formulario-Cadastrar">
     


     <div class="nomeCad">
         <label for="tipoAluguel" class="form-label">Nome:</label>
         <input type="text" class="form" name="tipoAluguel" id="tipoAluguel" 
         value="<?php echo $aluguel->nomePlano; ?>"
         require placeholder="Nome">
     </div>

     
     <div class="nomeCad">
         <label for="tipoAluguel" class="form-label">Plano Adicionail:</label>
         <input type="text" class="form" name="tipoAluguel" id="tipoAluguel" 
         value="<?php echo $aluguel->nomePlanoAdicional; ?>"
         require placeholder="Nome">
     </div>

     
     <div class="nomeCad">
         <label for="perifericoAdc" class="form-label">Perificos Adicionais:</label>
         <input  type="number" min="1" max="10" class="form" name="perifericoAdc" id="perifericoAdc" 
         value="<?php echo $aluguel->perifericoAdc; ?>"
         require placeholder="Quantidade">
     </div>

     <div class="nomeCad">
         <label for="precoAluguel" class="form-label">Preço:</label>
         <input type="number" class="form" name="precoAluguel" id="precoAluguel" 
         value="<?php echo $aluguel->precoAluguel; ?>"
         require placeholder="Nome do Plano">
     </div>

     <div class="nomeCad">
         <label for="dataSaidaProd" class="form-label">Data Saida:</label>
         <input  type="date" min="1" max="10" class="form" name="dataSaidaProd" id="dataSaidaProd" 
         value="<?php echo $aluguel->dataSaidaProd; ?>"
         require placeholder="Quantidade">
     </div>

     
     
        <div class="dataSaida">
            <label for="dataRetornoProd" class="form-label">Data de Retorno do Produto:</label>
            <input type="date" class="form" name="dataRetornoProd" id="dataRetornoProd" 
            value="<?php echo $aluguel->dataRetornoProd; ?>"
            require placeholder="Infome a Data de Saida do Produto">
        </div>

      

        <div class="nomeCad">
         <label for="idCliente" class="form-label">Plano:</label>
         <input type="text" class="form" name="idCliente" id="idCliente" 
         value="<?php echo $aluguel->idCliente; ?>"
         require placeholder="Informe o id do Cliente">
     </div>

     
     <div class="nomeCad">
         <label for="idFuncionario" class="form-label">Plano:</label>
         <input type="text" class="form" name="idFuncionario" id="idFuncionario" 
         value="<?php echo $aluguel->idFuncionario; ?>"
         require placeholder="Informe o id do Funcionario">
     </div>

     <div class="status">
            <label for="statusAluguel" class="form-label" name="statusAluguel" id="statusAluguel" require>
                Status</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="statusAluguel" id="statusAluguel">
                <option selected>status Aluguel</option>
                <option>ATIVO</option>
                <option>INATIVO</option>
                <option>DESATIVADO</option>
                
            </select>
        </div>

        
        <div class="BTN">
            <button type="submit" class="btn btn-primary">Novo Cadastro</button>
        </div>

    </div>
</form>

</section>
