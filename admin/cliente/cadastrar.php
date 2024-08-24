<h2>Cadastre um novo Cliente</h2>
<?php
if(isset ($_POST['nomeCliente'])){

    $nomeCliente = $_POST['nomeCliente'];
    $cpfCliente = $_POST['cpfCliente'];
    $cnpjCliente = $_POST['cnpjCliente'];
    $emailCliente = $_POST['emailCliente']; 
    $senhaCliente = $_POST['senhaCliente'];
    $telefoneCliente = $_POST['telefoneCliente'];
    $tipo = $_POST['tipo'];
    $statusCliente = $_POST['statusCliente'];

    // Incluir a classe do cliente
    require_once('class/clienteClass.php');

    // Criar uma instância do cliente
    $cliente = new clienteClass();

    // Definir as propriedades do cliente
    $cliente->nomeCliente = $nomeCliente;
    $cliente->cpfCliente = $cpfCliente;
    $cliente->cnpjCliente = $cnpjCliente;
    $cliente->emailCliente = $emailCliente;
    $cliente->senhaCliente = md5($senhaCliente); // Criptografar a senha
    $cliente->telefoneCliente = $telefoneCliente;
    $cliente->tipo = $tipo;
    $cliente->statusCliente = $statusCliente;

    // Chamar o método para cadastrar o cliente
    $cliente->Cadastrar();

    //var_dump($_POST['$nomeFuncionario']);

}
?>

<section>
<form class="formulario-CAD" action="index.php?p=cliente&c=cadastrar" method="POST" enctype="multipart/form-data">



    <div class="formulario-Cadastrar">
     


        <div class="nomeCad">
            <label for="nomeCliente" class="form-label">Nome Completo:</label>
            <input type="text" class="form" name="nomeCliente" id="nomeCliente" require placeholder="Nome do Cliente">
        </div>

        <div class="cpfCad">
            <label for="cpfCliente" class="form-label">CPF Cliente:</label>
            <input type="text" class="form" name="cpfCliente" id="cpfCliente" require placeholder="Infome o seu CPF">
        </div>

        <div class="nomeCad">
            <label for="cnpjCliente" class="form-label">CNPJ Cliente:</label>
            <input type="text" class="form" name="cnpjCliente" id="cnpjCliente" require placeholder="Infome o seu CNPJ">
        </div>

        
        <div class="email ">
                <label for="emailCliente" class="form-label">E-mail:</label>
                <input type="email" class="form" name="emailCliente" id="emailCliente" required placeholder="Informe o seu e-mail">
            </div>

        
        <div class="senhaCliente">
            <label for="senhaCliente" class="form-label">Senha do Cliente:</label>
            <input type="password" class="form" name="senhaCliente" id="senhaCliente" require placeholder="Infome sua senha ">
        </div>
        
        
        <div class="telefoneCliente">
            <label for="telefoneCliente" class="form-label">Telefone:</label>
            <input type="tell" class="form" name="telefoneCliente" id="telefoneCliente" require placeholder="Infome o seu Telefone">
        </div>

      

        
        <div class="tipo">
            <label for="tipo" class="form-label" name="tipo" 
            id="tipo" require> PESSOA FISSICA OU JURÍDICA   </label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="tipo" id="tipo">
                <option selected>PF OU PJ </option>
                <option>SOU PF</option>
                <option>SOU PJ</option>     
            </select>
        </div>
        
        <div class="statusCliente">
            <label for="statusCliente" class="form-label" name="statusCliente" id="statusCliente" require>
                Status do Cliente</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="statusCliente" id="statusCliente">
                <option selected>Status</option>
                <option>ATIVO</option>
                <option>PENDENTE</option>
                <option>DESATIVADO</option>
                
            </select>
        </div>

        <div class="BTN">
            <button type="submit" class="btn btn-primary">Novo Cadastro</button>
        </div>


    </div>



</form>

</section>