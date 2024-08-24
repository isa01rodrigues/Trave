<h2>Atualize o Cliente</h2>
<?php
// Include the class definition
$id = $_GET["id"];

require_once('class/clienteClass.php');

$clientes = new clienteClass ($id); // Instantiate a cliente object

if(isset($_POST['nomeCliente'])) {
   
    $nomeCliente                  =$_POST['nomeCliente'];
    $cpfCliente                   =$_POST['cpfCliente'];
    $cnpjCliente                  =$_POST['cnpjCliente'];
    $emailCliente                 =$_POST['emailCliente'];
    $senhaCliente                 =$_POST['senhaCliente'];
    $telefoneCliente              =$_POST['telefoneCliente'];
    $tipo                         =$_POST['tipo'];
    $status                       =$_POST['status'];
    $statusCliente                =$_POST['statusCliente'];

    // Defina propriedades no objeto cliente 

    $clientes -> nomeCliente = $nomeCliente;
    $clientes -> cpfCliente = $cpfCliente;
    $clientes -> cnpjCliente = $cnpjCliente;
    $clientes-> emailCliente = $emailCliente;
    $clientes-> senhaCliente = md5 ($senhaCliente);//criptografia de senha
    $clientes-> telefoneCliente= $telefoneCliente;
    $clientes-> tipo = $tipo;
    $clientes-> statusCliente = $statusCliente;
    
    $clientes->Atualizar();
}
?>

<section>
<form class="formulario-CAD" action="index.php?p=cliente&c=atualizar&id=<?php echo isset($clientes->idCliente) ?>" method="POST" enctype="multipart/form-data" >


    <div class="formulario-Cadastrar">

    <div class="nomeCad">
            <label for="nomeCliente" class="form-label">Nome Completo:</label>
            <input type="text" class="form" name="nomeCliente" id="nomeCliente" 
            value="<?php echo $clientes->nomeCliente; ?>"
            require placeholder="Nome do Cliente">
        </div>

        <div class="cpfCad">
            <label for="cpfCliente" class="form-label">CPF Cliente:</label>
            <input type="text" class="form" name="cpfCliente" id="cpfCliente" 
            value="<?php echo $clientes->cpfCliente; ?>"
            require placeholder="Infome o seu CPF">
        </div>

        <div class="nomeCad">
            <label for="cnpjCliente" class="form-label">CNPJ Cliente:</label>
            <input type="text" class="form" name="cnpjCliente" id="cnpjCliente"
            value="<?php echo $clientes->cnpjCliente; ?>"
            require placeholder="Infome o seu CNPJ">
        </div>

        <div class="email ">
            <label for="emailCliente" class="form-label">E-mail:</label>
            <input type="email" class="form" name="emailCliente" id="emailCliente"
            value="<?php echo $clientes->emailCliente; ?>"
            required placeholder="Informe o seu e-mail">
        </div>
        
        <div class="senhaCliente">
            <label for="senhaCliente" class="form-label">Senha do Cliente:</label>
            <input type="password" class="form" name="senhaCliente" id="senhaCliente" 
            value="<?php echo $clientes->senhaCliente; ?>"
            require placeholder="Infome sua senha ">
        </div>
        
        
        <div class="telefoneCliente">
            <label for="telefoneCliente" class="form-label">Telefone:</label>
            <input type="tell" class="form" name="telefoneCliente" id="telefoneCliente" 
            value="<?php echo $clientes->telefoneCliente; ?>"
            require placeholder="Infome o seu Telefone">
        </div>
        
        <div class="tipo">
            <label for="tipo" class="form-label" name="tipo" 
            id="tipo"  value="<?php echo $clientes->tipo; ?>" 
            require> PESSOA FISSICA OU JURÍDICA   </label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="tipo" id="tipo">
                <option selected>PF OU PJ </option>
                <option>SOU PF</option>
                <option>SOU PJ</option>     
            </select>
        </div>


        <div class="status">
            <label for="status" class="form-label" name="status" id="status"
             value="<?php echo $clientes->senhaCliente; ?>" require>Status do Cliente</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="status" id="status">
                <option selected>Status</option>
                <option>ATIVO</option>
                <option>PENDENTE</option>
                <option>DESATIVADO</option>
                
            </select>
        </div>

        <div class="BTN">
            <button type="submit" class="btn btn-primary">Atualizar Cadastro</button>
        </div>


    </div>



</form>

</section>