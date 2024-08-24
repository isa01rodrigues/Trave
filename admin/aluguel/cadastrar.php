<h2>Cadastro de Aluguel</h2>
<?php
if(isset ($_POST['tipoAluguel'])){

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
  

    /***De onde vai vir as inforações da class* */
    require_once('class/clienteClass.php');

    
    //METODO RESPONSAVEL DE PASSA AS INFORMAÇÕES DA CLASSE
    $aluguel = new aluguelClass();

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


    $aluguel -> Cadastrar();

    //var_dump($_POST['$nomeFuncionario']);

}
?>


<section>
<form class="formulario-CAD" action="index.php?p=aluguel&a=cadastrar" method="POST" enctype="multipart/form-data">

    <div class="formulario-Cadastrar">
     


     <div class="nomeCad">
         <label for="tipoAluguel" class="form-label">Nome:</label>
         <input type="text" class="form" name="tipoAluguel" id="tipoAluguel" require placeholder="Nome">
     </div>

     
     <div class="nomeCad">
         <label for="quantidadeProdAluguel" class="form-label">Quantidade de Produtos:</label>
         <input  type="number" min="1" max="10" class="form" name="quantidadeProdAluguel" id="quantidadeProdAluguel" 
         require placeholder="Quantidade">
     </div>

     <div class="nomeCad">
         <label for="planoAluguel" class="form-label">Plano:</label>
         <input type="text" class="form" name="planoAluguel" id="planoAluguel" require placeholder="Nome do Plano">
     </div>

     <div class="nomeCad">
         <label for="perifericoAdc" class="form-label">Perificos Adicionais no Plano:</label>
         <input  type="number" min="1" max="10" class="form" name="perifericoAdc" id="perifericoAdc" 
         require placeholder="Quantidade">
     </div>

     
     
        <div class="dataSaida">
            <label for="dataSaida" class="form-label">Data de Saida do Produto:</label>
            <input type="date" class="form" name="dataSaida" id="dataSaida" 
            require placeholder="Infome a Data de Saida do Produto">
        </div>

        <div class="dataRetorno">
            <label for="dataRetorno" class="form-label">Data de Retorno do Produto:</label>
            <input type="date" class="form" name="dataRetorno" id="dataRetorno" 
            require placeholder="Infome a Data de Retorno do Produto">
        </div>

        <div class="nomeCad">
         <label for="idCliente" class="form-label">Plano:</label>
         <input type="text" class="form" name="idCliente" id="idCliente" 
         require placeholder="Informe o id do Cliente">
     </div>

     
     <div class="nomeCad">
         <label for="idFuncionario" class="form-label">Plano:</label>
         <input type="text" class="form" name="idFuncionario" id="idFuncionario" 
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