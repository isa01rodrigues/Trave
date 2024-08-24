<h2>Página Desativar</h2>
<?php
require_once('class/Cfuncionario.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $funcionarios = new funcionarioClass();
    $funcionarios->idFuncionario = $id;
    $funcionarios->desativar();
}

if(isset ($_POST['nomeFuncionario'])){

    $nomeFundionario              =$_POST['nomeFundionario'];
    $cpfFuncionario                =$_POST['cpfFuncionario'];
    $dataNascFuncionario           =$_POST['dataNascFuncionario'];
    $emailFuncionario              =$_POST['emailFuncionario'];
    $telefoneFuncionario           =$_POST['telefoneFuncionario'];
    $funcaoFuncionario             =$_POST['funcaoFuncionario'];
    $acessoFuncionario             =$_POST['acessoFuncionario'];
    $dataAdminFuncionario          =$_POST['dataAdminFuncionario'];
    $statusFuncionario             =$_POST['statusFuncionario'];
    $senhaFuncionario              =$_POST['senhaFuncionario'];

    $arquivo =  $_FILES['fotoFuncionario'];

    //Responsável de fazer o upload da imagem que está no diretório raiz para o banco de dados, onde caso não
    // for encontrado irá mostrar erro / Uma situação para cada imprevisto 
    if($arquivo['error']){
        throw new Exception('Error'.$arquivo['error']);
    }

    if(move_uploaded_file($arquivo['tmp_name'], '../img/funcionario/' . $arquivo['name'])){
        $fotoExercicio = 'funcionario/' . $arquivo['name']; //exercicio/corrida.png
    }else{
        throw new Exception('Erro; não foi possivel realizar o upload da imagem.');
    }

    /***De onde vai vir as inforações da class* */
    require_once('class/Cfuncionario.php');

    
    //METODO RESPONSAVEL DE PASSA AS INFORMAÇÕES DA CLASSE
    $funcionarios = new funcionarioClass();

    $funcionarios ->nomeFuncionario = $nomeFuncionario;
    $funcionarios ->cpfFuncionario = $cpfFuncionario;
    $funcionarios -> emailFuncionario= $emailFuncionario;
    $funcionarios-> telefoneFuncionario = $telefoneFuncionario;
    $funcionarios-> dataNascFuncionario = $dataNascFuncionario;
    $funcionarios-> funcaoFuncionario = $funcaoFuncionario;
    $funcionarios-> acessoFuncionario = $acessoFuncionario;
    $funcionarios ->dataAdminFuncionario = $dataAdminFuncionario;
    $funcionarios-> statusFuncionario = $statusFuncionario;
    $funcionarios-> senhaFuncionario = md5($senhaFuncionario); //criptografia da senha
    $funcionarios-> fotoFuncionario = $fotoExercicio;

    $funcionarios -> desativar();

   // var_dump($_POST['$nomeFuncionario']);
}

?>

<section>
<form class="formulario-CAD" action="index.php?p=funcionario&i=desativar$id=<?php echo $funcionarios->idFuncionario ?>" method="POST" enctype="multipart/form-data">


    <div class=" foto-formulario">
        <img src="../funcionario/joana.png" id="imgFoto">
        <input type="file" class="form-control" id="fotoFuncionario" name="fotoFuncionario" style="display: none;">
        <!---name que faz referencia ao banco---->
    </div>

    <div class="formulario-Cadastrar">
     


        <div class="nomeCad">
            <label for="nomeFuncionario" class="form-label">Nome Completo:</label>
            <input type="text" class="form" name="nomeFuncionario" id="nomeFuncionario" require placeholder="Nome do Funcionario">
        </div>

        <div class="cpfCad">
            <label for="cpfFuncionario" class="form-label">CPF Funcionario:</label>
            <input type="text" class="form" name="cpfFuncionario" id="cpfFuncionario" require placeholder="Infome o cpf do funcionario">
        </div>

        
        <div class="dataNascFuncionario">
            <label for="dataNascFuncionario" class="form-label">Data de Nascimento:</label>
            <input type="date" class="form" name="dataNascFuncionario" id="dataNascFuncionario" require placeholder="Infome a Data de Nascimento do funcionario">
        </div>

        
        <div class="dataAdminFuncionario">
            <label for="dataAdminFuncionario" class="form-label">Data de Adminição:</label>
            <input type="date" class="form" name="dataAdminFuncionario" id="dataAdminFuncionario" require placeholder="Infome a Data de Adminição do funcionario">
        </div>

        <div class="email">
            <label for="emailFuncionario" class="form-label">E-mail do Funcionario:</label>
            <input type="e-mail" class="form" name="emailFuncionario" id="emailFuncionario" require placeholder="Infome o E-mail do funcionario">
        </div>

        <div class="senhaFuncionario">
            <label for="senhaFuncionario" class="form-label">Senha do Funcionario:</label>
            <input type="password" class="form" name="senhaFuncionario" id="senhaFuncionario" require placeholder="Infome a senha do funcionario">
        </div>
        

        <div class="telefoneFuncionario">
            <label for="telefoneFuncionario" class="form-label">Telefone do Funcionario:</label>
            <input type="tell" class="form" name="telefoneFuncionario" id="telefoneFuncionario" require placeholder="Infome o Telefone do funcionario">
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
            <button type="submit" class="btn btn-primary">Novo Cadastro</button>
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
