<?php
$id = $_GET["id"];

//echo  $id;
//acessando os metodos da classe
require_once("class/Cfuncionario.php");

$funcionarios = new funcionarioClass($id); //instanciar a class com o id do funcionario que vai ser editado //echo $funcionarios -> dataAdminFuncionario;
//mostra o nome do funcionario na tela para verificação de dados

if(isset ($_POST['nomeFuncionario'])){
    
    $nomeFuncionario              =$_POST['nomeFuncionario'];
    $dataNascFuncionario           =$_POST['dataNascFuncionario'];
    $cpfFuncionario                =$_POST['cpfFuncionario'];
    $emailFuncionario              =$_POST['emailFuncionario'];
    $senhaFuncionario              =$_POST['senhaFuncionario'];
    $telefoneFuncionario           =$_POST['telefoneFuncionario'];
    $funcaoFuncionario             =$_POST['funcaoFuncionario'];
    $acessoFuncionario             =$_POST['acessoFuncionario'];
    $dataAdminFuncionario          =$_POST['dataAdminFuncionario'];
    $statusFuncionario             =$_POST['statusFuncionario'];
    

    $arquivo =  $_FILES['fotoFuncionario'];

    //Responsável de fazer o upload da imagem que está no diretório raiz para o banco de dados, onde caso não
    // for encontrado irá mostrar erro / Uma situação para cada imprevisto 
    if (!empty($_FILES['$fotoFuncionario']['name'])) {
        //FOTO 

        $arquivo = $_FILES['fotoAluno'];

        //Responsável de fazer o upload da imagem que está no diretório raiz para o banco de dados, onde caso não for encontrado irá mostrar erro 
        // Um caso para cada situação 
        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
        if(move_uploaded_file($arquivo['tmp_name'], '../img/funcionario/' . $arquivo['name'])){
            $fotoAluno = 'funcionario/' . $arquivo['name']; 
        } else {
            throw new Exception('Erro; não foi possivel realizar o upload da imagem.');
        }

}  
    else {
        $fotoFuncionario = $funcionarios -> fotoFuncionario;
    }

    //Atualizar o objeto funcionarioClass com novos dados

    $funcionarios ->nomeFuncionario = $nomeFuncionario;
    $funcionarios-> dataNascFuncionario = $dataNascFuncionario;
    $funcionarios ->cpfFuncionario = $cpfFuncionario;
    $funcionarios -> emailFuncionario= $emailFuncionario;
    $funcionarios-> senhaFuncionario = $senhaFuncionario; //criptografia da senha
    $funcionarios-> telefoneFuncionario = $telefoneFuncionario;
    $funcionarios-> funcaoFuncionario = $funcaoFuncionario;
    $funcionarios-> acessoFuncionario = $acessoFuncionario;
    $funcionarios ->dataAdminFuncionario = $dataAdminFuncionario;
    $funcionarios-> statusFuncionario = $statusFuncionario;
    
    $funcionarios-> fotoFuncionario = $fotoFuncionario;

    //Chama o método para atualizar o registro
    $funcionarios -> Atualizar();


}
?>

<section>
<form class="formulario-exercicio" action="index.php?p=funcionario&i=atualizar&id=<?php echo $funcionarios->idFuncionario?>"
 method="POST" enctype="multipart/form-data">

    <div class=" foto-formulario">
        <img src="../funcionario/luiza.png" id="imgFoto">
        <input type="file" class="form-control" id="fotoFuncionario" name="fotoFuncionario"
         style="display: none;" >
        <!---name que faz referencia ao banco---->
    </div>

    <div class="formulario-Cadastrar">
     


        <div class="nomeCad nomeFuncionario">
            <label for="nomeFuncionario" class="form-label">Nome Funcionario:</label>
            <input type="text" class="form" 
            name="nomeFuncionario" id="nomeFuncionario" 
            value="<?php echo $funcionarios->nomeFuncionario; ?>"
            require placeholder="Nome do Funcionario">
        </div>

        <div class="cpfCad">
            <label for="cpfFuncionario" class="form-label">CPF Funcionario:</label>
            <input type="text" class="form" name="cpfFuncionario" id="cpfFuncionario"
            value="<?php echo $funcionarios->cpfFuncionario; ?>"
            require placeholder="Infome o cpf do funcionario">
        </div>

        
        <div class="dataNascFuncionario">
            <label for="dataNascFuncionario" class="form-label">Data de Nascimento:</label>
            <input type="date" class="form" name="dataNascFuncionario" id="dataNascFuncionario"
            value="<?php echo $funcionarios->dataNascFuncionario; ?>"
            require placeholder="Infome a Data de Nascimento do funcionario">
        </div>

        
        <div class="dataAdminFuncionario">
            <label for="dataAdminFuncionario" class="form-label">Data de Adminição:</label>
            <input type="date" class="form" name="dataAdminFuncionario" id="dataAdminFuncionario" 
            value="<?php echo $funcionarios->dataAdminFuncionario; ?>"
            require placeholder="Infome a Data de Adminição do funcionario">
        </div>

        <div class="email">
            <label for="emailFuncionario" class="form-label">E-mail do Funcionario:</label>
            <input type="e-mail" class="form" name="emailFuncionario" id="emailFuncionario" 
            value="<?php echo $funcionarios->emailFuncionario; ?>"
            require placeholder="Infome o E-mail do funcionario">
        </div>

        <div class="senhaFuncionario">
            <label for="senhaFuncionario" class="form-label">Senha do Funcionario:</label>
            <input type="password" class="form" name="senhaFuncionario" id="senhaFuncionario" 
            value="<?php echo $funcionarios->senhaFuncionario; ?>"
            require placeholder="Infome a senha do funcionario">
        </div>
        

        <div class="telefoneFuncionario">
            <label for="telefoneFuncionario" class="form-label">Telefone do Funcionario:</label>
            <input type="tell" class="form" name="telefoneFuncionario" id="telefoneFuncionario" 
            value="<?php echo $funcionarios->telefoneFuncionario; ?>"
            require placeholder="Infome o Telefone do funcionario">
        </div>

        
        <div class="funcaoFuncionario">
            <label for="funcaoFuncionario" class="form-label" name="funcaoFuncionario" id="funcaoFuncionario" require>
                Função do Funcionario</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="funcaoFuncionario" id="funcaoFuncionario">
                <option selected>Categoria Funcionario</option>
                <option>Atendente</option>
                <option>Gerente</option>
                <option>Dev Front-end</option>
                <option>Dev Back-end</option>
                <option>Dev Sistema Web</option>
                <option>Dev Sistema Desktop</option>
                <option>Tecnico em Ti</option>
            </select>
        </div>

        <div class="acessoFuncionario">
            <label for="acessoFuncionario" class="form-label" name="acessoFuncionario" id="acessoFuncionario" require>
                Acesso do Funcionario</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="acessoFuncionario" id="acessoFuncionario">
                <option selected>Categoria Acesso</option>
                <option>SIMPLES</option>
                <option>MEDIO</option>
                <option>INTERMEDIARIO</option>
                <option>ADMIN</option>
                
            </select>
        </div>
        
        <div class="statusFuncionario">
            <label for="statusFuncionario" class="form-label" name="statusFuncionario" id="statusFuncionario" require>
                Status do Funcionario</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="statusFuncionario" id="statusFuncionario">
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

<script>
    document.getElementById('imgFoto').addEventListener('click', function() {
        // alert('Click na Img')
        document.getElementById('fotoFuncionario').click();
    });

    document.getElementById('fotoFuncionario').addEventListener('change', function(e) {
        let imgFoto = document.getElementById('imgFoto'); //quem ta pedando a foto
        let arquivo = e.target.files[0];

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(e) {
                imgFoto.src = e.target.result; //
            }

            carregar.readAsDataURL(arquivo);
        }

    });
</script>
